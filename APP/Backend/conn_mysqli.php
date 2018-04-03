 <?php 
// datos para la conexion a mysql 
define('DB_SERVER','localhost'); 
define('DB_USER','u359446301_parro'); 
define('DB_NAME','u359446301_parro'); 
define('DB_PASS','2454_Laisla'); 

                $mysqli = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
				if ($mysqli -> connect_errno) {
				die( "Imposible conectar con la Base de Datos: (" . $mysqli -> mysqli_connect_errno 
				. ") " . $mysqli -> mysqli_connect_error);
				}
				// else
				// echo "Conexión exitosa!";
				/* cambiar el conjunto de caracteres a utf8 */
				$mysqli->set_charset("utf8");
				// if (!$mysqli->set_charset("utf8")) {
				//     printf("Error cargando el conjunto de caracteres utf8: %s\n", $mysqli->error);
				//     exit();
				// } else {
				//     printf("Conjunto de caracteres actual: %s\n", $mysqli->character_set_name());
				// }
				
?>