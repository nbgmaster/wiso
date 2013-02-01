<?php  

  if (!isset($start_backup)) {

  ?>

<br>

<form method="post">

<table cellpadding="3" cellspacing="1" class="tableinborder">
               
  <tr>

    <td class="tablea">

    <b>Vollständige Datensicherung</b>

    </td>

    <td class="tableb" align="center">

    <input type="radio" name="full_backup" checked="checked">

    </td>

  </tr>

  <tr>

    <td class="tableb">

    <b>nur Struktur Datensicherung</b>

    </td>

    <td class="tablea" align="center">

    <input type="radio" name="structure_backup">

    </td>

  </tr>

  <tr>

    <td class="tablea">

    <b>nur Inhalt Datensicherung</b>

    </td>

    <td class="tableb" align="center">

    <input type="radio" name="data_backup">

    </td>

  </tr>

</form>

</table>

<br>

<input type="submit" name="start_backup" value="Datensicherung starten">

<?php  }

else  {

  // Backup function

  function parsefield($field, $typ)  {

  if ($typ == 'integer') return $field;
  
      else  {
  
          $field = addslashes($field);
          $field = str_replace("\t", "\\t", $field);
          $field = str_replace("\r", "\\r", $field);
          $field = str_replace("\n", "\\n", $field);
          return '\''.$field.'\'';
     }

  }

  function mysql_export_table($table, $connection='')  { 

  // Structure

  $dump = "CREATE TABLE `".$table."` (\n";
  
  $types = array();
  $result = mysql_query('DESCRIBE '.$table, $connection);
  $count = mysql_num_rows($result);
  
  $i = 0;

  while ($row = mysql_fetch_array($result))  {
  
         $name = $row['Field'];
         $typ = ' '.$row['Type'];
    
         $fieldtypes[$name] = (!stristr($row['Type'], "ENUM") && ((stristr($row['Type'], "INT") || stristr($row['Type'], "FLOAT") || stristr($row['Type'], "DOUBLE") || stristr($row['Type'], "REAL") || stristr($row['Type'], "DECIMAL") || stristr($row['Type'], "NUMERIC") || stristr($row['Type'], "TIMESTAMP") || stristr($row['Type'], "YEAR"))) ? ("integer") : ("string"));
    
         if  ($row['Null'] == '') $null = ' NOT NULL';
         else $null = ' NULL';
       
         if  ($row['Default'] == '') $default = '';
         else $default = " DEFAULT '".$row['Default']."'";
    
         if  ($row['Extra'] == '') $extra = '';
         else $extra = ' '.$row['Extra'];
    
         $dump .= "  ".$name.$typ.$null.$default.$extra;
    
         $i++;
         if($i < $count) $dump .= ", \n";

  }
      
  $index = array();
  $result = mysql_query('SHOW KEYS FROM '.$table, $connection);

  while ($row = mysql_fetch_array($result))  {
  
         $keyname  = $row['Key_name'];
         $comment  = (isset($row['Comment'])) ? $row['Comment'] : '';
         $sub_part = (isset($row['Sub_part'])) ? $row['Sub_part'] : '';
        
        if ($keyname != 'PRIMARY' && $row['Non_unique'] == 0) $keyname = 'UNIQUE|'.$keyname;
         
        if ($comment == 'FULLTEXT') $keyname = 'FULLTEXT|'.$keyname;

        if (!isset($index[$keyname])) $index[$keyname] = array();
      
        if  ($sub_part > 1) $index[$keyname][] = $row['Column_name']."(".$sub_part.")";
        else $index[$keyname][] = $row['Column_name'];
  }

  mysql_free_result($result);
  
  foreach ($index as $keyname => $columns)  {
  
           $dump .= ", \n";
           if ($keyname == "PRIMARY") $dump .= "  PRIMARY KEY (";
           elseif (substr($keyname, 0, 6) == "UNIQUE") $dump .= "  UNIQUE ".substr($keyname, 7)." (";
           elseif (substr($keyname, 0, 8) == "FULLTEXT") $dump .= "  FULLTEXT ".substr($keyname, 9)." (";
           else $dump .= "  KEY ".$keyname." (";
    
           $dump .= implode($columns, ", ").')';
  }
  
  $dump .= "\n);\n\n";
  
  // Content


  $insert_tag = 0;
  $rowcount   = 0;
  $result     = mysql_query('SELECT * FROM '.$table, $connection);

  while ($row = mysql_fetch_array($result, MYSQL_ASSOC))  {
   
         $values = '';
         foreach ($row as $key => $field)
    
                  if  ($values != '') $values .= ','.parsefield($field, $fieldtypes[$key]);
                  else $values = parsefield($field, $fieldtypes[$key]);
    
                  if ($insert_tag == 0)  {
                      $dump2 .= 'INSERT INTO '.$table.' VALUES ('.$values.')';
                      $insert_tag = 1;    
                  }

                  else $dump2 .= ',('.$values.')';

                  if ($insert_tag == 1 && $rowcount == 500)  {
                      $dump2 .= ";\n";
                      $insert_tag = 0;
                      $rowcount = 0;
                  }
    
                  $rowcount++;
         }
 
          mysql_free_result($result);
  
          if($insert_tag == 1) $dump2 .= ";\n";
  
          return $dump;

  }


  // Output Data

  $mysqlconnect = mysql_connect('localhost', 'root', '');
  $result       = mysql_list_tables('forum', $mysqlconnect);
  $num_tables   = mysql_num_rows($result);

  $dump_time      =  date("d.m.Y_H.i",$timestamp);

  for ($i=0;$i<$num_tables;$i++)  {

       $table       = mysql_tablename($result, $i);
       $sql_dump    = mysql_export_table($table, $mysqlconnect);

       $backup_file = fopen("backup/$dump_time.sql", "a+"); 

       fwrite($backup_file, "\n".$sql_dump); 
       fclose($backup_file); 

  }

  mysql_free_result($result);


  // Download File

  echo"<a href=\"backup/$dump_time.sql\" target=\"_blank\">Backup-Datei downloaden</a>";

  }
