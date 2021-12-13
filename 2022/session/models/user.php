<?php

class User{

    protected $name;
    protected $username;
    protected $email;
    protected $isActive;
    protected $isAdmin;
    protected $createdAt;
    protected $password;

    public function __construct($name,$username, $email, $isActive,$isAdmin, $createdAt, $password){
        $this->name = $name;
        $this->username = $username;
        $this->email = $email;
        $this->isActive = $isActive;
        $this->isAdmin = $isAdmin;
        $this->createdAt = $createdAt;
        $this->password = $password;
    }
   


}