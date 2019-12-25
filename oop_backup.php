<?php

$name = 'vaso';
$age = 25;

interface UserInterface{
    public function getName();
    public function setName($nameValue);
    public function getPassword();
    public function setPassword();
    public function saveData();
}

interface AdminInterface extends UserInterface{
    public function delete();
}

interface GuestInterface extends UserInterface{
    public function pay();
}

class UserAdmin implements AdminInterface{
    private $name;
    private $age;
    
    public function __construct($nameValue, $ageValue){
        $this->name = $nameValue;
        $this->age = $ageValue;
    }
    
    public function saveData(){
        var_dump($this->age . ' ' . $this->name);
    }
    
    public function getName(){
        return $this->name;
    }
    
    public function setName($nameValue){
        $this->name = $nameValue;
    }
    
    public function setPassword() {
        
    }
    
    public function getPassword() {
        
    }
    
    public function delete() {
        
    }
}

class UserGuest implements GuestInterface{
    private $name;
    private $age;
    
    public function __construct($nameValue, $ageValue){
        $this->name = $nameValue;
        $this->age = $ageValue;
    }
    
    public function saveData(){
        var_dump($this->age . ' ' . $this->name);
    }
    
    public function getName(){
        return $this->name;
    }
    
    public function setName($nameValue){
        $this->name = $nameValue;
    }
    
    public function setPassword() {
        
    }
    
    public function getPassword() {
        
    }
    
    public function pay() {
        
    }
}

$User1 = new UserAdmin($name, $age);
$User1->setName("gora");
$User1->saveData();

//echo '<pre>';
//var_dump($User1->getName());
//echo '</pre>';