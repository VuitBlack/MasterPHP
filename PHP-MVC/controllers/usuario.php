<?php

class UsuarioController{

    public function getAllUsers(){
        require_once 'models/usuario.php';

        $usuario = new Usuario();   //Creamos un objeto usuario
        $getAllUsers = $usuario->getAllUsers();    //Instanciamos al método obtener todos los usuarios.

        require_once 'views/usuarios/get_all.php';

    }

    public function addUser(){
        require_once 'views/usuarios/add_user.php';
    }


}


?>