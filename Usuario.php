<?php
class Usuario {
    private $servidor;
    private $usuario;
    private $clave;
    private $bd;

    function __construct() {
        $this->servidor = "localhost";
        $this->usuario = "root";
        $this->clave = "";
        $this->bd = "logindatos";
    }

    function validarUsuario($User,$Contraseña){
        $link = mysqli_connect($this->servidor, $this->usuario,"",$this->bd);
        mysqli_select_db ($link, $this->bd);
        $consulta = "SELECT User,Contraseña FROM registrouser WHERE User='$User' AND Contraseña='$Contraseña'";
        $resultado = mysqli_query($link, $consulta);
        if ($row = mysqli_fetch_array($resultado)) {
            header("Location: index.php");
        } else {
            echo '<scritp>
            alert("Usuario no registrado");
            window.location.href="index.php";
            </scritp>';
        }
    }

    function anexarUsuario ($ID,$Nombre,$Apellido,$Genero,$User,$Contraseña)
    {
        $link = mysqli_connect($this->servidor, $this->usuario,"",$this->bd);
        mysqli_select_db ($link, $this->bd);
        $consulta = "INSERT INTO registrouser (ID,Nombre,Apellido,Genero,User,Contraseña) VALUES ('$ID','$Nombre','$Apellido','$Genero','$User','$Contraseña')";
        $resultado = mysqli_query($link, $consulta);
        if ($resultado) {
            echo '<scritp>
            alert("Usuario registrado");
            window.location.href="index.php";
            </scritp>';
        } else {
            echo '<scritp>
            alert("Usuario no registrado");
            window.location.href="index.php";
            </scritp>';
        }
        mysqli_close($link);
    }   
    function actualizarUsuario ($ID,$Nombre,$Apellido,$Genero,$User,$Contraseña){
        $link = mysqli_connect($this->servidor, $this->usuario,"",$this->bd);
        mysqli_select_db ($link, $this->bd);
        $actualiza = "UPDATE registrouser SET Nombre='$Nombre',Apellido='$Apellido',Genero='$Genero',User='$User',Contraseña='$Contraseña' WHERE ID='$ID'";
        $resultado = mysqli_query($link, $actualiza) or die ('La consulta fall&oacute: ' .mysqli_error($link));
        mysqli_close($link);
    }
    function borrarUsuario ($ID){
        $link = mysqli_connect($this->servidor, $this->usuario,"",$this->bd);
        mysqli_select_db ($link, $this->bd);
        $borrar = "DELETE FROM registrouser WHERE ID='$ID'";
        $resultado = mysqli_query($link, $borrar) or die ('No se pudo borrar el registro fall&oacute: ' .mysqli_error($link));
        mysqli_close($link);
    }
    function listarUsuario (){
        $link = mysqli_connect($this->servidor, $this->usuario,"",$this->bd);
        mysqli_select_db ($link, $this->bd);
        $consulta = "SELECT * FROM registrouser";
        $resultado = mysqli_query($link, $consulta) or die ('La consulta fall&oacute: ' .mysqli_error($link));
        echo "<table border='1'>";
        echo "<tr>";
        echo "<th>ID</th>";
        echo "<th>Nombre</th>";
        echo "<th>Apellido</th>";
        echo "<th>Genero</th>";
        echo "<th>User</th>";
        echo "<th>Contraseña</th>";
        echo "</tr>";
        while ($fila = mysqli_fetch_array($resultado)) {
            echo "<tr>";
            echo "<td>".$fila['ID']."</td>";
            echo "<td>".$fila['Nombre']."</td>";
            echo "<td>".$fila['Apellido']."</td>";
            echo "<td>".$fila['Genero']."</td>";
            echo "<td>".$fila['User']."</td>";
            echo "<td>".$fila['Contraseña']."</td>";
            echo "</tr>";
        }
        echo "</table>";
        mysqli_close($link);
    }
}
?>