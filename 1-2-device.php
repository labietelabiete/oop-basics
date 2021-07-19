<?php
class Device{
  public $processor;
  public $storage;
  public $battery;
  public $serialNumber;

  public function getSerialNumber() {
    return $this->serialNumber;
  }

}

class Mobile extends Device{
  public $camera;
}

class Tablet extends Device{
  public $size;
}


class DeviceManager {

  public function getDeviceSerialNumber(Device $device) {
    return $device->getSerialNumber();
  }
}