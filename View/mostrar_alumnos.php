<?php
//include '../Model/conexion.php';
require_once '../Model/alumnoDAO.php';
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
        <input type="submit" value="Filtrar">
</div>

<?php
if(isset($_POST['fnombre']) || isset($_POST['fapellido'])){
    $alumno = new AlumnoDao();
    echo $alumno->filtrarAlumno();

} else {
$alumno = new AlumnoDao();
echo $alumno->mostrarAlumno();
}
?>