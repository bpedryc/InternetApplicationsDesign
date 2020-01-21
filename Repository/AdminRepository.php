<?php

class AdminRepository extends Repository
{
    public function getAdmin($userId) {
        $statement = $this->database->connect()->prepare("
            SELECT * FROM Admins WHERE UserId = :userId 
        ");

        $statement->execute([
            "userId" => $userId
        ]);

        $admin = $statement->fetch(PDO::FETCH_ASSOC);
        if ($admin == null) {
            return null;
        }
        return new Admin(
            $admin['UserId']
        );
    }
}