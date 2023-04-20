<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Cars;
use App\Models\Customers;
use App\Models\Parts;
use App\Models\Sales;
use App\Models\Suppliers;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $car1 = new Cars(
            [
                'Make' => 'Audi',
                'Model' => 'A4',
                'TravelledDistance' => 100000,
            ]
        );
        $car2 = new Cars(
            [
                'Make' => 'Toyota',
                'Model' => 'Camry',
                'TravelledDistance' => 200000,
            ]
        );

        $car1->save();
        $car2->save();

        $customer1 = new Customers(
            [
                'Name' => 'John',
                'BirthDate' => '1990-01-01',
                'IsYoungDriver' => true,
            ]
        );

        $customer1->save();

        $customer2 = new Customers(
            [
                'Name' => 'Jane',
                'BirthDate' => '1995-01-01',
                'IsYoungDriver' => false,
            ]
        );

        $customer2->save();

        $sale1 = new Sales(
            [
                'Discount' => 0.1,
                'car_id' => $car1->id,
                'customer_id' => $customer1->id,
            ]
        );

        $sale1->save();

        $sale2 = new Sales(
            [
                'Discount' => 0.2,
                'car_id' => $car2->id,
                'customer_id' => $customer2->id,
            ]
        );

        $sale2->save();

        $supplier1 = new Suppliers(
            [
                'Name' => 'Supplier 1',
                'IsImporter' => true
            ]
        );

        $supplier1->save();

        $carpart1 = new Parts(
            [
                'Name' => 'Engine',
                'Price' => 1000,
                'Quantity' => 10,
                'Supplier_id' => $supplier1->id,
            ]
        );

        $carpart1->save();

        $car1->parts()->attach($carpart1->id);


        $user1 = new \App\Models\User(
            [
                'name' => 'alex',
                'email' => 'alex@alex.com',
                'role' => 'admin',
            ]
        );

        $user1->password = bcrypt('alex');
        $user1->save();

        $user2 = new \App\Models\User(
            [
                'name' => 'user',
                'email' => 'user@alex.com',
                'role' => 'user',
            ]
        );

        $user2->password = bcrypt('user');
        $user2->save();

    }
}
