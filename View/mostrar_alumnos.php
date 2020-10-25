<?php
include '../Model/conexion.php';
$id_alum=-1;
//print_r($lista_persona);
echo "<a href='crear_alumno.html?id_alum=$id_alum'>Insertar </a>";
?>

<div class="form">
    <form action="mostrar_alumnos.php" method="POST">
        <label for="fnombre">Nombre</label>
            <input type="text" id="fnombre" name="fnombre" placeholder="Introduce el nombre...">
        <label for="fapellido">Primer apellido</label>
            <input type="text" id="fapellido" name="fapellido" placeholder="Introduce el apellido...">
        <input type="submit" value="Buscar">
</div>

<?php
if(isset($_POST['fnombre']) || isset($_POST['fapellido'])){
    //filtrará los alumnos por nombre y primer apellido//
    $q = "SELECT id_alum, nombre_alum, apellido1, apellido2 FROM tbl_alumnos WHERE nombre_alum 
    LIKE '%{$_POST['fnombre']}%' AND apellido1 LIKE '%{$_POST['fapellido']}%'";
    $sentencia = $pdo->prepare($q);
    $sentencia->execute();
    $id_alum=-1;
    $lista_alumno=$sentencia->fetchAll(PDO::FETCH_ASSOC);
    echo "<table style='width: 100%';>";
    echo "<tr>";
        echo "<th>Modificar</th>";
        echo "<th>Eliminar</th>";
        echo "<th>Nombre</th>";
        echo "<th>PrimerApellido</th>";
        echo "<th>SegundoApellido</th>";
    echo "</tr>";
foreach($lista_alumno as $alumno) {
    echo "<tr style='text-align: center';>";
    if ($id_alum==$alumno['id_alum']) {
        //echo " , {$persona['num_telefono']}";
        $id_alum=-1;
        continue;
    } else {
        echo "<br>";
    }
    $id_alum=$alumno['id_alum'];
    echo "<td><a href='actualizar_alumno.php?id_alum=$id_alum'>Modificar </a></td>";
    echo "<td><a href='eliminar_alumno.php?id_alum=$id_alum'>Eliminar </a></td>";
    echo "<td>{$alumno['nombre_alum']}</td>";
    echo "<td>{$alumno['apellido1']}</td>";
    echo "<td>{$alumno['apellido2']}</td>";
    $id_alum=$alumno['id_alum'];
    echo "</tr>";
    }
echo "</table>";

} else {

//echo "<a href='filtrar_alumno.html?id_alum=$id_alum'>Filtrar </a>";
$query="SELECT id_alum, nombre_alum, apellido1, apellido2 FROM tbl_alumnos";
$sentencia=$pdo->prepare($query);
$sentencia->execute();
$id_alum=-1;
$lista_alumno=$sentencia->fetchAll(PDO::FETCH_ASSOC);
echo "<table style='width: 100%';>";
    echo "<tr>";
        echo "<th>Modificar</th>";
        echo "<th>Eliminar</th>";
        echo "<th>Nombre</th>";
        echo "<th>PrimerApellido</th>";
        echo "<th>SegundoApellido</th>";
    echo "</tr>";
foreach($lista_alumno as $alumno) {
    echo "<tr style='text-align: center';>";
    if ($id_alum==$alumno['id_alum']) {
        //echo " , {$persona['num_telefono']}";
        $id_alum=-1;
        continue;
    } else {
        echo "<br>";
    }
    $id_alum=$alumno['id_alum'];
    echo "<td><a href='actualizar_alumno.php?id_alum=$id_alum'>Modificar </a></td>";
    echo "<td><a href='eliminar_alumno.php?id_alum=$id_alum'>Eliminar </a></td>";
    echo "<td>{$alumno['nombre_alum']}</td>";
    echo "<td>{$alumno['apellido1']}</td>";
    echo "<td>{$alumno['apellido2']}</td>";
    $id_alum=$alumno['id_alum'];
    echo "</tr>";
    }
echo "</table>";
}
?>