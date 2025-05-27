# Vehicle Listing App

A basic PHP-based vehicle listing system using **OOP principles**. This project allows users to **add**, **edit**, and **delete** vehicles with data saved in a `JSON` file.

## Features

- Add, edit, and delete vehicle records
- Data is stored in a local `vehicles.json` file (no database required)
- Vehicle properties: name, type, price, image
- Simple frontend simulation using PHP
- Clean architecture using:
  - Trait (`FileHandler`)
  - Interface (`VehicleActions`)
  - Abstract class (`VehicleBase`)
  - Concrete class (`VehicleManager`)
