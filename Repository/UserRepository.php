<?php

class UserRepository extends Repository
{
    public function getUser(string $email): ?User
    {
        $statement = $this->database->connect()->prepare('
            SELECT * FROM users WHERE email = :email
        ');
        $statement->bindParam(':email', $email, PDO::PARAM_STR);
        $statement->execute();

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
            $user['Id']
        );
    }

    public function insertUser(User $user) : int
    {
        $connection = $this->database->connect();
        $statement = $connection->prepare("
            INSERT INTO Users (Email, Password, FirstName, LastName, BirthDate, AddressId)
            VALUES (:email, :password, :firstName, :lastName, :birthDate, :addressId)
        ");

        echo $user->getAddressId();

        $statement->execute([
            'email' => $user->getEmail(),
            'password' => $user->getPassword(),
            'firstName' => $user->getFirstName(),
            'lastName' => $user->getLastName(),
            'birthDate' => $user->getBirthDate()/*->format('Y-m-d')*/,
            'addressId' => $user->getAddressId()
        ]);

        return $connection->lastInsertId();
    }
}