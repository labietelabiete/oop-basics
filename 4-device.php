<?php
class Device{
  public $processor;
  public $storage;
  public $battery;
  public $name;
  public $serialNumber;
  public $id;

  public function setId($id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
}

interface DeviceRepository {
  public function create(Device $device): Device;
  public function findById($id);
}


class MemoryRepository implements DeviceRepository {
  private $devices = [];

  public function create(Device $device): Device {
    $device->setId(uniqid());
    $this->devices[$device->getId()] = $device;
    return $device;
  }

  public function findById($id) {
    if (!isset($this->devices[$id])) {
      echo "Device not found";
    }
    return $this->devices[$id];
  }
}

class DeviceManager extends MemoryRepository{
  public function addDevice(DeviceRepository $repository, Device $device){
    $repository->create($device);
  }
}

$myDevice = new Device;
$myDeviceRepository = new DeviceRepository;

$myDeviceManager = new DeviceManager;

$myDeviceManager->addDevice($myDeviceRepository, $myDevice);


