<?php
include ("Usuario.php");
    class Control {
        private $obj;
        function __construct() {
            $this->obj = new Usuario();
        }
        function seleccionarOpcion()
        {
            $usuario = $_POST['User'];
            $contraseña = $_POST['Contraseña'];
            
            if (isset($_POST['ingresar'])) {
                $this->obj->validarUsuario($usuario,$contraseña);
            }


            if(isset($_POST['anexar']))
            {
                $this->registrarDatos(1);    
            }
            if(isset($_POST['actualizar']))
            {
                $this->registrarDatos(2);    
            }
            if(isset($_POST['listar']))
            {
                $this->registrarDatos(3);    
            }
            if(isset($_POST['borrar']))
            {
                $this->registrarDatos(4);    
            }

        }
        public function registrarDatos($oper){
            $id = $_POST['ID'];
            $nombre = $_POST['Nombre'];
            $apellido = $_POST['Apellido'];
            $genero = $_POST['Genero'];
            $user =$_POST['User'];
            $contraseña =$_POST['Contraseña'];

            $obj = new Usuario();
            switch ($oper) {
                case 1:
                    $obj->anexarUsuario($id,$nombre,$apellido,$genero,$user,$contraseña);
                    break;
                case 2:
                    $obj->actualizarUsuario($id,$nombre,$apellido,$genero,$user,$contraseña);
                    break;
                case 3:
                    $obj->listarUsuario();
                    break;
                case 4:
                    $obj->borrarUsuario($id);
                    break;                
                }
        }
    }
    $obj1 = new Control();
    $obj1 -> seleccionarOpcion();
    //echo <a href="index.php">Volver</a>;
?>