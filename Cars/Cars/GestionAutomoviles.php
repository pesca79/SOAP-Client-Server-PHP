<?php
class GestionAutomovilesAuth {

    public function TestBD() {
        $con = $this->ConectarMarcas();
    }

    public function ConectarMarcas() {
        try {
            $user = "ies";  // usuario con el que se va conectar con MySQL
            $pass = "daw";  // contraseña del usuario
            $dbname = "coches";  // nombre de la base de datos
            $host = "localhost";  // nombre o IP del host

            $db = new PDO("mysql:host=$host; dbname=$dbname", $user, $pass);  //conectar con MySQL y SELECCIONAR LA Base de Datos
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  //Manejo de errores con PDOException
            echo "<p>Se ha conectado a la BD $dbname.</p>\n";
            return $db;
        } catch (PDOException $e) {  // Si hubieran errores de conexión, se captura un objeto de tipo PDOException
            print "<p>Error: No se pudo conectar con la BD $dbname.</p>\n";
            print "<p>Error: " . $e->getMessage() . "</p>\n";  // mensaje de excepción

            exit();  // terminar si no hay conexión $db
        }
    }

    public function ObtenerMarcas() {
        $con = $this->ConectarMarcas();

        $marcas = array();
        if ($con) {
            $result = $con->query('select id, marca from marcas');

            while ($row = $result->fetch(PDO::FETCH_ASSOC))
                $marcas[$row['id']] = $row['marca'];
        }
        return $marcas;
    }

    public function ObtenerModelos($marca) {
        $marca = intVal($marca);
        $modelos = array();

        if ($marca !== 0) {
            $con = $this->ConectarMarcas();
            $con->query("SET CHARACTER SET utf8");

            if ($con) {
                $result = $con->query('select id, modelo from modelos ' .
                    'where marca = ' . $marca);

                while ($row = $result->fetch(PDO::FETCH_ASSOC))
                    $modelos[$row['id']] = $row['modelo'];
            }
        }

        return $modelos;
    }

    public function ObtenerMarcasUrl(){

        $con = $this->ConectarMarcas();

        $marcasUrl = array();
        if ($con) {
            $result = $con->query('select id, modeloUrl from url');

            while ($row = $result->fetch(PDO::FETCH_ASSOC))
                $marcasUrl[$row['id']] = $row['modeloUrl'];
        }
        return $marcasUrl;

    }

    public function ObtenerModelosPorMarca($marca){

        $modelos = array();

        if ($marca != "") {
            $con = $this->ConectarMarcas();
            $con->query("SET CHARACTER SET utf8");

            if ($con) {

                    $result = $con->query('select id, modelo from modelos where marca in (select id from marcas where marca = '. $marca . ')');

                while ($row = $result->fetch(PDO::FETCH_ASSOC))
                    $modelos[$row['id']] = $row['modelo'];
            }
        }

        return $modelos;

    }

    public static function authenticate($header_params) {

        if($header_params->username == 'ies' && $header_params->password == 'daw') {
       
        return true;
       
        } 
       
        else throw new SoapFault('Wrong user/pass combination', 401); 
       
        }
              
}
