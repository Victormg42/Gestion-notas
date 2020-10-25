<?php
include '../Model/administrador.php';
include '../Model/adminDAO.php';
if (isset($_POST['email_admin'])) {
    $admin = new Administrador($_POST['email_admin'], md5($_POST['passwd_admin']));
    $adminDAO = new AdminDAO();
    if($adminDAO->login($admin)){
        echo 'Maravilloso';
        header('Location: ../View/mostrar_alumnos.php');
    }else {
        echo 'Error';
        header('Location: ../View/vista_login.html');
    }
}else {
    echo 'Error';
    header('Location: ../View/vista_login.html');
}