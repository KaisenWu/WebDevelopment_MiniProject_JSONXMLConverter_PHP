<?php

class FileConverter {
    
    public static function jasonToXMLDisplay($jsonCars) {
        $stdCars = json_decode($jsonCars);
        $rootElement = new simpleXMLElement("<cars></cars>");
        foreach($stdCars as $stdCar) {
            $xmlCar = $rootElement->addChild("car");
            $xmlCar->addChild("make",$stdCar->make);
            $xmlCar->addChild("model",$stdCar->model);
            $xmlCar->addChild("year",$stdCar->year);
            $xmlCar->addChild("vin",$stdCar->vin); 
        }
        header("Content-Type: text/xml");
        echo $rootElement->asXML();
    }

    public static function xmlToJsonDisplay($xmlCars) {
        $simpleXMLCars = simplexml_load_string($xmlCars);
        $jsonCars = json_encode($simpleXMLCars);
        echo $jsonCars;
    }
}