<?php
namespace App\Classes;

interface VehicleActions {
    public function addVehicle($data);
    public function editVehicle($id, $data);
    public function deleteVehicle($id);
    public function getVehicles();
}
