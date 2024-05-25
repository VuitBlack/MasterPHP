<?php

class Usuario{

    const URL_COMPLETA="http://localhost";
    public $email;
    public $password;

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }
}

//Se puede mostrar a nivel de propiedad instanciando la clase:
$usuario = new Usuario();
echo $usuario::URL_COMPLETA.'<br/>';


//Se puede instancia directamete a través de la clase sin instanciarla.
echo Usuario::URL_COMPLETA.'<br/>';

var_dump($usuario);

