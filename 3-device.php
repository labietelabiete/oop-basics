<?php
abstract class DeviceAbstract{
  public $processor;
  public $storage;
  public $battery;
  public $name;
  public $serialNumber;

  abstract public function getDetail($deviceId);
  public function getId(){
    return $this->name;
  }
  public function getSerialNumber(){
    return $this->serialNumber;
  }
}

class Mobile extends DeviceAbstract{
  public $camera;

  public function getDetail($deviceId){
    return $this->name;
  }
}

