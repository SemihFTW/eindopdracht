<?php

class UtilityController extends Utility{
    public function insertData(){
        $this->insertUser($voornaam, $achternaam, $postcode);
    }
    //showusers
    public function showUsers(){
        $this->selectUsers();
    }
}