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

require 'conexion.php';

$username = htmlspecialchars($_SESSION["username"]);

/* Un arreglo de las columnas a mostrar en la tabla */
$columns = ['id', 'concepto', 'precio', 'cantidad', 'precio * cantidad', 'unidad', 'descripcion', 'usuario'];

/* Nombre de la tabla */
$table = "inventario";
$id = 'id';

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


/* Limit */
$limit = isset($_POST['registros']) ? $conection->real_escape_string($_POST['registros']) : 2;
$pagina = isset($_POST['pagina']) ? $conection->real_escape_string($_POST['pagina']) : 0;

if(!$pagina){
    $inicio = 0;
    $pagina = 1;
} else{
    $inicio = ($pagina - 1) * $limit;
}

$sLimit = "LIMIT $inicio , $limit";


/* Consulta */
    $sql = "SELECT SQL_CALC_FOUND_ROWS " . implode(", ", $columns) . " FROM $table $where AND usuario = '$username' $sLimit";
    $resultado = $conection->query($sql);
    $num_rows = $resultado->num_rows;

/* Consulta para total de registros filtrados */
$sqlFiltro = "SELECT FOUND_ROWS()";
$resFiltro= $conection->query($sqlFiltro);
$row_filtro = $resFiltro->fetch_array();
$totalFiltro = $row_filtro[0];

/* Consulta para total de registros filtrados */
$sqlTotal = "SELECT count($id) FROM $table WHERE usuario = '$username'";
$resTotal= $conection->query($sqlTotal);
$row_Total = $resTotal->fetch_array();
$totalRegistros = $row_Total[0];

/* Mostrado resultados */
$output = [];
$output['totalRegistros'] = $totalRegistros;
$output['totalFiltro'] = $totalFiltro;
$output['data'] = '';
$output['paginacion'] = '';


if ($num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
        $output['data'] .= '<tr>';
        $output['data'] .= '<td>' . $row['concepto'] . '</td>';
        $output['data'] .= '<td> <p>$' . number_format($row['precio'], 2) . '</td>';
        $output['data'] .= '<td>' . $row['cantidad'] . '</td>';
        $output['data'] .= '<td> <p>$' . number_format($row['precio * cantidad'], 2) . '</td>'; 
        $output['data'] .= '<td>' . $row['unidad'] . '</td>';
        $output['data'] .= '<td>' . $row['descripcion'] . '</td>';
        $output['data'] .= '<td>
        <a class="btn btn-secondary" href="actualizar2.php?id='. $row['id'] . '"><img src="../img/editar.png" alt="" style="width: 25px; height: 25px;"></a>
        <a class="btn btn-danger" href="eliminar.php?id='. $row['id'] . '" onclick="return ConfirmDelete()"><img src="../img/basura.png" alt="" style="width: 25px; height: 25px;"></a>
        </td>';
        $output['data'] .= '</tr>';
    }
} else {
    $output['data'] .= '<tr>';
    $output['data'] .= '<td colspan="8">Sin resultados</td>';
    $output['data'] .= '</tr>';
}

if($output['totalRegistros'] > 0){
    $totalPaginas =ceil($output['totalRegistros'] / $limit); 

    $output['paginacion'] .= '<nav>';
    $output['paginacion'] .= '<ul class="pagination">';

    $numeroInicio = 1;

    if(($pagina - 5) > 1){
        $numeroInicio = $pagina - 5;
    }

    $numeroFin = $numeroInicio + 5;

    if($numeroFin > $totalPaginas){
        $numeroFin = $totalPaginas;
    }

    for($i = $numeroInicio; $i <= $numeroFin; $i++){
        if($pagina == $i){
            $output['paginacion'] .= '<li class="page-item active"><a class="page-link" href="#">'.$i.'</a></li>';
        } else{

        
        $output['paginacion'] .= '<li class="page-item"><a class="page-link" href="#" onclick="getData
        ('. $i .')">'.$i.'</a></li>'; 
        }
    }

    $output['paginacion'] .= '</ul>';
    $output['paginacion'] .= '</nav>';
}

echo json_encode($output, JSON_UNESCAPED_UNICODE);

?>