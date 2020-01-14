<?php


class ShopRepository extends Repository
{
    public function getShops(){

        $statement = $this->database->connect()->prepare("
           SELECT * FROM Shops 
        ");
        $statement->execute();

        $shops_raw = $statement->fetchAll(PDO::FETCH_ASSOC);

        $shops = array();
        foreach ($shops_raw as $shop_raw){
            $shop = new Shop(
                $shop_raw['Name'],
                $shop_raw['Address'],
                $shop_raw['Photo'],
                $shop_raw['Id']
            );
            array_push($shops, $shop);
        }

        return $shops;
    }
}