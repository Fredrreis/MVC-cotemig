<?php
class PetsController{

        public function all(){

            $obj = new Pet();
            $pets = $obj->all();

            include "view/pets.php";
        }

}
?>