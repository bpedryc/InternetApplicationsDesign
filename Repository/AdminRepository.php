<?php

class AdminRepository extends Repository
{
    public function __construct(PDO $dbConnection)
    {
        parent::__construct($dbConnection);
    }

    public function getAdmin($userId) {
        $statement = $this->connection->prepare("
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