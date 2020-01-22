<?php

class UserRepository extends Repository
{
    public function __construct(PDO $dbConnection)
    {
        parent::__construct($dbConnection);
    }

    public function getUser(string $email): ?User
    {
        $statement = $this->connection->prepare("
            SELECT * FROM Users WHERE email = :email
        ");

        $statement->execute([
            'email' => $email
        ]);

        $user = $statement->fetch(PDO::FETCH_ASSOC);

        if($user == false) {
            return null;
        }

        return new User(
            $user['Email'],
            $user['Password'],
            $user['FirstName'],
            $user['LastName'],
            $user['BirthDate'],
            $user['AddressId'],
            $user['Followers'],
            $user['Following'],
            $user['Bio'],
            $user['Id']
        );
    }

    public function insertUser(User $user) : int
    {
        $statement = $this->connection->prepare("
            INSERT INTO Users (Email, Password, FirstName, LastName, BirthDate, AddressId)
            VALUES (:email, :password, :firstName, :lastName, :birthDate, :addressId)
        ");

        $statement->execute([
            'email' => $user->getEmail(),
            'password' => $user->getPassword(),
            'firstName' => $user->getFirstName(),
            'lastName' => $user->getLastName(),
            'birthDate' => $user->getBirthDate()/*->format('Y-m-d')*/,
            'addressId' => $user->getAddressId(),
        ]);

        return $this->connection->lastInsertId();
    }

    public function getAllUsers() : array
    {
        $statement = $this->connection->prepare("
            SELECT * FROM Users
        ");

        $statement->execute();

        $users_serialized = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $users_serialized;
    }

    public function deleteUser(int $userId)
    {
        $statement = $this->connection->prepare("
            DELETE FROM Users WHERE Id = :userId
        ");

        $statement->execute([
            'userId' => $userId
        ]);
    }
}