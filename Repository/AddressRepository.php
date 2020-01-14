<?php


class AddressRepository extends Repository
{
    public function insertAddress(Address $address) : int
    {
        $connection = $this->database->connect();
        $statement = $connection->prepare("
            INSERT INTO Addresses (Country, State, City, Street)
            VALUES (:country, :state, :city, :street)
        ");

        $statement->execute([
            'country' => $address->getCountry(),
            'state' => $address->getState(),
            'city' => $address->getCity(),
            'street' => $address->getStreet()
        ]);

        return $connection->lastInsertId();
    }
}