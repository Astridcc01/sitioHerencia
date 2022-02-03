<?php
require_once('./padre/Animal.php');
class Perro extends Animal{
    public function comer(){
        echo "<p>Animal comiendo</p>";
    }
    
    public function dormir(){
        echo "<p>El perro come huesos</p>";
    }
}
?>
