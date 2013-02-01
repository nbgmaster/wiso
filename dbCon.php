<?php 

     /* Verbindung mit mySQL-Datenbank aufbauen */

class EstablishDBConnection  {

  private $dbserver = "localhost";
  private $dbuser   = "root";
  private $dbpass   = "";
  private $dbname   = "wiso";

  function connectDB() {

    $db = mysql_connect($this->dbserver, $this->dbuser, $this->dbpass, $this->dbname);

    mysql_select_db($this->dbname, $db) OR die(mysql_error());

  }

}


/* Instanziere Verbindungsaufbau mit Datenbank */

$DBcon = new EstablishDBConnection();

$DBcon->connectDB();

                   mysql_query("SET NAMES 'utf-8'");
				 //  mysql_set_charset('utf8');
				   				
