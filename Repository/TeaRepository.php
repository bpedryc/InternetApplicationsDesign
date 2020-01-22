<?php


class TeaRepository extends Repository
{
    public function __construct(PDO $dbConnection)
    {
        parent::__construct($dbConnection);
    }

    /*public function getAllTeas() : array
    {
        $connection = $this->database->connect();
        $statement = $connection->prepare("
            SELECT * FROM Teas
        ");

        $statement->execute();

        $teas_serialized = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $teas_serialized;
    }*/

    public function getTeaCount($userId) : int
    {
        $statement = $this->connection->prepare('
            SELECT COUNT(*) As "TeaCount" FROM Teas WHERE UserId = :userId
        ');

        $statement->execute([
            'userId' => $userId
        ]);

        $retval = $statement->fetch(PDO::FETCH_ASSOC);
        return $retval['TeaCount'];
    }

    public function getTea(int $teaId)
    {
        $statement = $this->connection->prepare("
            SELECT * FROM Teas WHERE Teas.Id = :Id
        ");

        $statement->execute([
            'Id' => $teaId
        ]);

        $tea_serialized = $statement->fetch(PDO::FETCH_ASSOC);

        return $tea_serialized;
    }

    public function getTeas(int $userId, int $pagenr) : array
    {
        $offset = ($pagenr-1) * 6;

        $statement = $this->connection->prepare("
            SELECT * FROM Teas WHERE UserId = :userId LIMIT 6 OFFSET $offset
        ");

        $statement->execute([
          'userId' => $userId
        ]);

        $teas_serialized = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $teas_serialized;
    }

    public function insertTea(Tea $tea){
        $statement = $this->connection->prepare("
            INSERT INTO Teas (Name, Type, LeafAmount, Temperature, SteepingTime, Notes, UserId)
            VALUES (:name, :type, :proportions, :temperature, :time, :notes, :userId)
        ");

        $statement->execute([
            'name' => $tea->getName(),
            'type' => $tea->getType(),
            'temperature' => $tea->getTemperature(),
            'proportions' => $tea->getLeafAmount(),
            'time' => $tea->getSteepingTime(),
            'notes' => $tea->getNotes(),
            'userId' => $tea->getUserId()
        ]);
    }

    public function removeTea(int $teaId){
        $statement = $this->connection->prepare("
           DELETE FROM Teas WHERE Id = :teaId 
        ");

        $statement->execute([
            'teaId' => $teaId
        ]);
    }

}