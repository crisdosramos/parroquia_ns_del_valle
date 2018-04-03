 <?php 
// datos para la conexion a mysql 
define('DB_SERVER','localhost'); 
define('DB_USER','root'); 
define('DB_NAME','digitel_db'); 
define('DB_PASS','0325laisla'); 
                $con = mysql_connect(DB_SERVER,DB_USER,DB_PASS) or die("Imposible conectar con la DB"); 
                mysql_select_db(DB_NAME,$con) or die("Imposible conectar con la DB"); 
                mysql_set_charset('utf8', $con);
?>