<?php


class AddressRepository extends Repository
{
    public function __construct(PDO $dbConnection)
    {
        parent::__construct($dbConnection);
    }

    public function insertAddress(Address $address) : int
    {
        $statement = $this->connection->prepare("
            INSERT INTO Addresses (Country, State, City, Street)
            VALUES (:country, :state, :city, :street)
        ");

        $statement->execute([
            'country' => $address->getCountry(),
            'state' => $address->getState(),
            'city' => $address->getCity(),
            'street' => $address->getStreet()
        ]);

        return $this->connection->lastInsertId();
    }
}