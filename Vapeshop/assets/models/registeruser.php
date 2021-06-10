<?php
class registeruser extends user
{ //el objeto usuario con sus atributos,constructor y geters.

    public $address;
    public $first_name;
    public $last_name;

    public function __construct($name, $password, $address, $first_name, $last_name)
    {
        $this->name = $name;
        $this->password = $password;
        $this->address = $address;
        $this->frist_name = $first_name;
        $this->last_name = $last_name;
    }

    public function getAddress()
    {
        return $this->address;
    }
    public function getFirstName()
    {
        return $this->first_name;
    }

    public function getLastName()
    {
        return $this->last_name;
    }
}
