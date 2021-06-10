<?php
class user { //el objeto usuario con sus atributos,constructor y geters.

    public $id_user;
    public $name;
    public $password;

    public function __construct($name,$password){
        $this->name=$name;
        $this->password=$password;
    }

    public function getIdUser(){
        return $this->iduser;
    }
    public function getName(){
        return $this->name;
    }
    public function getPassword(){
        return $this->password;
    }

}
