<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ../Registro-login/login.php");
    exit;
}
?>


<?php
/*
* Script: Cargar datos de lado del servidor con PHP y MySQL
* Autor: Marco Robles
* Team: Códigos de Programación
*/


require 'conexion.php';

$username = htmlspecialchars($_SESSION["username"]);

/* Un arreglo de las columnas a mostrar en la tabla */
$columns = ['id', 'nombre_empresa', 'descripcion', 'direccion', 'telefono_empresa', 'nombre_vendedor', 'telefono_vendedor', 'correo','usuario'];

/* Nombre de la tabla */
$table = "proveedor";

$campo = isset($_POST['campo']) ? $conection->real_escape_string($_POST['campo']) : null;


/* Filtrado */
$where = '$username';

if ($campo != null) {
    $where = "WHERE (";

    $cont = count($columns);
    for ($i = 0; $i < $cont; $i++) {
        $where .= $columns[$i] . " LIKE '%" . $campo . "%' OR ";
    }
    $where = substr_replace($where, "", -3);
    $where .= ")";
}


/* Consulta */
    $sql = "SELECT " . implode(", ", $columns) . " FROM $table $where AND usuario = '$username'";
    $resultado = $conection->query($sql);
    $num_rows = $resultado->num_rows;

/* Mostrado resultados */
$html = '';

$html .= '<script type="text/javascript">
    function ConfirmDelete()
    {
        var respuesta = confirm("¿Estas seguro que deseas Eliminar al proveedor?");
        if(respuesta == true){
            return true;
        }
        else{
            return false;
        }
    }

</script>';

if ($num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
        $html .= '<tr>';
        $html .= '<td>' . $row['nombre_empresa'] . '</td>';
        $html .= '<td>' . $row['descripcion'] . '</td>';
        $html .= '<td>' . $row['direccion'] . '</td>';
        $html .= '<td>' . $row['telefono_empresa'] . '</td>';
        $html .= '<td>' . $row['nombre_vendedor'] . '</td>';
        $html .= '<td>' . $row['telefono_vendedor'] . '</td>';
        $html .= '<td>' . $row['correo'] . '</td>';
        $html .= '<td>
        <a class="btn btn-secondary" href="actualizar2.php?id='. $row['id'] . '"><img src="../img/editar.png" alt="" style="width: 25px; height: 25px;"></a>
        <a class="btn btn-danger" href="eliminar.php?id='. $row['id'] . '" onclick="return ConfirmDelete()"><img src="../img/basura.png" alt="" style="width: 25px; height: 25px;"></a>
        </td>';
        $html .= '</tr>';
    }
} else {
    $html .= '<tr>';
    $html .= '<td colspan="8">Sin resultados</td>';
    $html .= '</tr>';
}

echo json_encode($html, JSON_UNESCAPED_UNICODE);

?>



