<?php 

class Utility extends Database{
    public function insertUser($voornaam, $achternaam, $postcode) {
        $db = $this->connect();
        $sql = "INSERT INTO users (voornaam, achternaam, postcode) VALUES (?, ?, ?)";
        $stmt = $db->prepare($sql);
        $stmt->execute([$voornaam, $achternaam, $postcode]);
    }

    public function selectUsers() {
        $db = $this->connect();
        $sql = "SELECT * FROM users";
        $stmt = $db->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }
}