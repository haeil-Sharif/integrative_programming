<?php

class User
{
    public $name;
    public $username;
    public $email;

    function __construct($name, $username, $email)
    {
        $this->name = $name;
        $this->username = $username;
        $this->email = $email;
    }
}

class Acct extends User
{
    function addFriend()
    {
        echo "{$this->name}. Add a friend <br>";
    }
    function postStatus()
    {
        echo "{$this->name}. Posted a status";
    }
}

$Acct=new Acct('Sharif','BabaYaga','pyrex101@gmail.com');
$Acct->addFriend();
$Acct->postStatus();

?>