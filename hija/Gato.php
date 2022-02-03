<?php
require_once('./padre/Animal.php');
class Gato extends Animal{
    public function comer(){
        echo "<p>Animal comiendo</p>";
    }

    public function dormir1(){
        echo "<p>usando protected de Animal</p>";
        $this->dormir();
    }
}
?>