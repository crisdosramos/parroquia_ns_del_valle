 <?php 
// datos para la conexion a mysql 
define('DB_SERVER','localhost'); 
define('DB_USER','u359446301_parro'); 
define('DB_NAME','u359446301_parro'); 
define('DB_PASS','2454_Laisla'); 
                $con = mysql_connect(DB_SERVER,DB_USER,DB_PASS) or die("Imposible conectar con la DB"); 
                mysql_select_db(DB_NAME,$con) or die("Imposible conectar con la DB"); 
                mysql_set_charset('utf8', $con);
?>