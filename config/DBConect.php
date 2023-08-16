<?php
    class Database { 
        public $db;   // handle of the db connexion    
        private static $dns = "mysql:host=localhost;dbname=colegio"; 
        private static $user = "root"; 
        private static $pass = "";     
        private static $instance;

        public function __construct ()  
        {        
            $this->db = new PDO(self::$dns,self::$user,self::$pass);       
        } 

        // Se crea la instancia de la clase Database.
        // Se instancia la clase para iniciarla y poder acceder a las propiedades.
        public static function getInstance()
        { 
            if(!isset(self::$instance)) 
            { 
                $object= __CLASS__; 
                self::$instance=new $object; 
            } 
            return self::$instance; 
        } 

        public function DatosEstudiantes() { 
            $conexion = Database::getInstance(); 
            $sql  ="SELECT id,identificacion,nombres,apellidos,email,telefono,pais,ciudad,grado from estudiantes ";
            $result = $conexion->db->prepare($sql);    
            $result->execute(); 
            return $result; 
        } 

        public function CrearEstudiante($identificacion,$nombres,$apellidos,$email,$telefono,$pais,$ciudad,$grado) { 

            try {
                $conexion = Database::getInstance(); 
                $result = $conexion->db->prepare("INSERT INTO estudiantes (identificacion,nombres,apellidos,email,telefono,pais,ciudad,grado) VALUES (:identificacion,:nombres,:apellidos,:email,:telefono,:pais,:ciudad,:grado)");
                $result->execute(
                                    array(
                                        ':identificacion'=>$identificacion,
                                        ':nombres'=>$nombres,
                                        ':apellidos'=>$apellidos,
                                        ':email'=>$email,
                                        ':telefono'=>$telefono,
                                        ':pais'=>$pais,
                                        ':ciudad'=>$ciudad,
                                        ':grado'=>$grado
                                    )
                                );
                return "2";
            } catch(PDOException $e) {
                return "0";
            }
        }

        public function editEstudiante($id) { 
            $conexion = Database::getInstance(); 
            $sql="SELECT id,identificacion,nombres,apellidos,email,telefono,pais,ciudad,grado from estudiantes where id=:id"; 
            $result = $conexion->db->prepare($sql);     
            $params = array("id" => $id); 
            $result->execute($params);
            return $result; 
        } 

        public function updateEstudiante($id,$nombres,$apellidos,$email,$telefono,$identificacion,$pais,$ciudad,$grado) { 

            try {
                $conexion = Database::getInstance(); 
                $result = $conexion->db->prepare("UPDATE estudiantes set nombres=:nombres,apellidos=:apellidos,email=:email,telefono=:telefono,identificacion=:identificacion,pais=:pais,ciudad=:ciudad,grado=:grado where id=:id ");
                $result->execute(
                                    array(
                                        ':nombres'=>$nombres,
                                        ':apellidos'=>$apellidos,
                                        ':email'=>$email,
                                        ':telefono'=>$telefono,
                                        ':identificacion'=>$identificacion,
                                        ':id'=>$id,
                                        ':pais'=>$pais,
                                        'ciudad'=>$ciudad,
                                        ':grado'=>$grado
                                    )
                                );
                return "3";
            } catch(PDOException $e) {
                return "0";
            }
        }
        
        public function EliminarEstudiante($id){
            try{
                $conexion = Database::getInstance(); 
                $result = $conexion->db->prepare("DELETE FROM estudiantes WHERE id=?");
                $result->execute(array($id));

                return "1";
            }catch (PDOException $e) {
                return "0";
            }
        }


        public function DatosMaterias() { 
            $conexion = Database::getInstance(); 
            $sql="SELECT id,nombre from materias"; 
            $result = $conexion->db->prepare($sql);    
            $result->execute(); 
            return $result; 
        } 

        public function EliminarMateria($id){
            try{
                $conexion = Database::getInstance(); 
                $result = $conexion->db->prepare("DELETE FROM materias WHERE id=?");
                $result->execute(array($id));

                return "1";
            }catch (PDOException $e) {
                return "0";
            }
        }

        public function CrearMateria($nombre) { 

            try {
                $conexion = Database::getInstance(); 
                $result = $conexion->db->prepare("INSERT INTO materias (nombre) VALUES (:nombre)");
                $result->execute(
                                    array(
                                        ':nombre'=>$nombre
                                    )
                                );
                return "2";
            } catch(PDOException $e) {
                return "0";
            }
        } 

        public function editMateria($id) { 
            $conexion = Database::getInstance(); 
            $sql="SELECT id,nombre,creditos,fecha,profesor from materias where id=:id"; 
            $result = $conexion->db->prepare($sql);     
            $params = array("id" => $id); 
            $result->execute($params);
            return $result; 
        } 

        public function updateMateria($nombre,$id,$creditos,$fecha,$profesor) { 

            try {
                $conexion = Database::getInstance(); 
                $result = $conexion->db->prepare("UPDATE materias set nombre=:nombre,creditos=:creditos,fecha=:fecha,profesor=:profesor where id=:id ");
                $result->execute(
                                    array(
                                        ':nombre'=>$nombre,
                                        ':id'=>$id,
                                        ':creditos'=>$creditos,
                                        ':fecha'=>$fecha,
                                        ':profesor'=>$profesor
                                    )
                                );
                return "3";
            } catch(PDOException $e) {
                return "0";
            }
        }
        

    }

?>