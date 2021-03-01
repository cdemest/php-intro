<?php

class crud
{
    private PDO $db;

    function __construct($conn)
    {
        $this->db = $conn;
    }

    function insert($fname, $lname, $birthdate, $email, $job) {
        try {
            $sql = "INSERT INTO user VALUES (0, :fname, :lname, :birthdate, :email, :job)";
            $stmt = $this->db->prepare($sql);

            $stmt->bindparam(':fname', $fname);
            $stmt->bindparam(':lname', $lname);
            $stmt->bindparam(':birthdate', $birthdate);
            $stmt->bindparam(':email', $email);
            $stmt->bindparam(':job', $job);
            
            $stmt->execute();
            return true;
        } catch (PDOException $ex) {
            echo $ex->getMessage();
            return false;
        }
    }

}
