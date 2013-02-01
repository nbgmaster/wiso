<?php   
     // config 
	 //include('inc/config2.php'); 
	 
	 /*if($_REQUEST['module'] == 'lehre') { $path = $_SERVER['DOCUMENT_ROOT'].$pagedir."lehrefiles/"; }
	 if($_REQUEST['module'] == 'seminare') { $path = $_SERVER['DOCUMENT_ROOT'].$pagedir."seminarefiles/"; }
	 if($_REQUEST['module'] == 'intern') { $path = $_SERVER['DOCUMENT_ROOT'].$pagedir."internfiles/"; }*/
	 $dbserver = 'localhost';  
     $dblogin = 'web158';      
     $dbpassword = '#SMRbac01'; 
     $dbname = 'usr_web158_1'; 
     $db_link = mysql_connect($dbserver, $dblogin, $dbpassword);
     mysql_select_db($dbname, $db_link);
     $filename = $_GET['file'];
	 $timestamp = time();
	 $timestamp2 = $timestamp - (5*60);
     $ip = $_SERVER['REMOTE_ADDR'];
	 $data_check = mysql_query("select * from dl_counter where ip = '$ip' && timestamp > '$timestamp2'");
	 $num_check = mysql_num_rows($data_check);
	 if($num_check == 0) {
     mysql_query("insert into dl_counter (file,timestamp,ip) values ('$filename','$timestamp','$ip')") or die(mysql_error());
	 }
	 
	 $path = "downloads/";
	 
     $fullPath = $path.$_GET['file'];
if ($fd = fopen ($fullPath, "r")) {
    $fsize = filesize($fullPath);
    $path_parts = pathinfo($fullPath);
    $ext = strtolower($path_parts["extension"]);
    switch ($ext) {
        case "gif":
        header("Content-type: image/gif"); // add here more headers for diff. extensions
        header("Content-Disposition: attachment; filename=\"".$_GET['name']."\""); // use 'attachement' to force a download
        break;
        case "bmp":
        header("Content-type: image/bmp"); // add here more headers for diff. extensions
        header("Content-Disposition: attachment; filename=\"".$_GET['name']."\""); // use 'attachement' to force a download
        break;
        case "doc":
        header("Content-type: application/msword"); // add here more headers for diff. extensions
        header("Content-Disposition: attachment; filename=\"".$_GET['name']."\""); // use 'attachement' to force a download
        break;
        case "jpg":
        header("Content-type: image/jpeg"); // add here more headers for diff. extensions
        header("Content-Disposition: attachment; filename=\"".$_GET['name']."\""); // use 'attachement' to force a download
        break;
        case "docx":
        header("Content-type: application/vnd.openxmlformats-officedocument.wordprocessingml.document"); // add here more headers for diff. extensions
        header("Content-Disposition: attachment; filename=\"".$_GET['name']."\""); // use 'attachement' to force a download
        break;
        case "xlsx":
        header("Content-type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet"); // add here more headers for diff. extensions
        header("Content-Disposition: attachment; filename=\"".$_GET['name']."\""); // use 'attachement' to force a download
        break;
        case "pdf":		
        header("Content-type: application/pdf"); // add here more headers for diff. extensions
        header("Content-Disposition: attachment; filename=\"".$_GET['name']."\""); // use 'attachement' to force a download
        break;
        case "png":
        header("Content-type: image/png"); // add here more headers for diff. extensions
        header("Content-Disposition: attachment; filename=\"".$_GET['name']."\""); // use 'attachement' to force a download
        break;
        case "ppt":
        header("Content-type: application/vnd.ms-powerpoint"); // add here more headers for diff. extensions
        header("Content-Disposition: attachment; filename=\"".$_GET['name']."\""); // use 'attachement' to force a download
        break;
        case "pptx":
        header("Content-type: application/vnd.openxmlformats-officedocument.presentationml.presentation"); // add here more headers for diff. extensions
        header("Content-Disposition: attachment; filename=\"".$_GET['name']."\""); // use 'attachement' to force a download
        break;
        case "xls":
        header("Content-type: application/vnd.ms-excel"); // add here more headers for diff. extensions
        header("Content-Disposition: attachment; filename=\"".$_GET['name']."\""); // use 'attachement' to force a download
        break;
        case "zip":
        header("Content-type: application/zip"); // add here more headers for diff. extensions
        header("Content-Disposition: attachment; filename=\"".$_GET['name']."\""); // use 'attachement' to force a download
        break;
        case "txt":
        header("Content-type: text/plain"); // add here more headers for diff. extensions
        header("Content-Disposition: attachment; filename=\"".$_GET['name']."\""); // use 'attachement' to force a download
        break;
        default;
        header("Content-type: application/octet-stream");
        header("Content-Disposition: filename=\"".$_GET['name']."\"");
    }
    header("Content-length: $fsize");
    header("Cache-control: private"); //use this to open files directly
	
	
	
    while(!feof($fd)) {
        $buffer = fread($fd, 2048);
        echo $buffer;
    }
}
fclose ($fd);
exit;
?>