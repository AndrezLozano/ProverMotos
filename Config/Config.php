<?php 

    //define("BASE_URL", "http://localhost/proverMotos/");
    const BASE_URL = "http://localhost/proverMotos";
    
    //Zona horaria
	date_default_timezone_set('America/Bogota');

    //Datos de conexión a Base de Datos
    const DB_HOST = "localhost";
    const DB_NAME = "db_proverMotos";
    const DB_USER = "root";
    const DB_PASSWORD = "";
    const DB_CHARSET = "charset=utf8";

    //Deliminadores decimal y millar Ej. 24,1989.00
	const SPD = ",";
	const SPM = ".";

    //Simbolo de moneda
	const SMONEY = "$";

?>