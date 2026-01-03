<?php

class User {

    private $id;
    private $fullName;
    private $email;
    private $password;
    private $status;
    private $role;
    private $themes = [];

    private const PENDING = 'pending';
    private const ACTIVE = 'active';
    private const BLOCKED = 'blocked';
    private const ADMIN = 'admin';
    private const USER = 'user';


    public function __construct($fullName, $email, $role=self::USER, $status = self::PENDING)
    {
        $this->fullName = $fullName;
        $this->email = $email;
        $this->status = $status;
        $this->role = $role;
    }

    public function getFullName(){return $this->fullName;}
    public function getEmail(){return $this->email;}
    public function getPassword(){return $this->password;}
    public function getStatus(){return $this->status;}
    public function getRole(){return $this->role;}
    public function getThemes(){return $this->themes;}

    public function setId($id){$this->id = $id;}
    public function setFullName($fullName){$this->fullName = $fullName;}
    public function setEmail($email){$this->email = $email;}
    public function setThemes($themes){$this->themes = $themes;}
    public function setPassword($password){$this->password = $password;}
    public function setStatus($status){$this->status = $status;}
    public function setRole($role){$this->role = $role;}

}