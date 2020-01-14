<?php


class TeaRepository extends Repository
{
    public function getTeas(int $userId) : array
    {
        $connection = $this->database->connect();
        $statement = $connection->prepare("
            SELECT * FROM Teas WHERE Teas.UserId = :userId
        ");

        $statement->execute([
          'userId' => $userId
        ]);

        $teas_raw = $statement->fetchAll(PDO::FETCH_ASSOC);

        $teas = array();
        foreach($teas_raw as $tea_raw){
            array_push($teas,
                new Tea(
                    $tea_raw['Name'],
                    $tea_raw['Type'],
                    $tea_raw['LeafAmount'],
                    $tea_raw['Temperature'],
                    $tea_raw['SteepingTime']
                )
            );
        }

        return $teas;
    }
}