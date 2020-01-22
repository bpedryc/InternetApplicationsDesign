<?php


class ShopsController extends BaseController
{


    public function getAvailableShops(){

        $shopRepository = new ShopRepository(Database::establishConnection());
        $shops = $shopRepository->getShops();

        $addressRepository = new AddressRepository(Database::establishConnection());
        foreach($shops as $shop){
            $address = $addressRepository->getAddress($shop->getAddressId());
            $shop->setAddress($address);
        }

        $this->render('shops', ['shops' => $shops]);
    }
}