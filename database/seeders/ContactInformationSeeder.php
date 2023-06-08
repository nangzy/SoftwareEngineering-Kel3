<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactInformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        ContactInformation::insert([
            'user_id' => 1,
            'fullname' => "Mutia Lankasuma Putri",
            'country' => "Indonesia",
            'city' => "Jakarta",
            'regency' => "Jakarta Barat",
            'postal_code' => "10120",
            'address' => "Jl. Lingkar Jaya No.19, Kalideres",
            'phone_number' => "081200173916",
            'shipping_method' => "JNE"
        ]);

        ContactInformation::insert([
            'user_id' => 2,
            'fullname' => "Fauzal Hamsah",
            'country' => "Indonesia",
            'city' => "Pekanbaru",
            'regency' => "Kampar",
            'postal_code' => "28461",
            'address' => "Jl. Raya Gelombang No.109, Tapung Hilir",
            'phone_number' => "081698227622",
            'shipping_method' => "Indah Cargo"
        ]);

        ContactInformation::insert([
            'user_id' => 2,
            'fullname' => "Cindy Permatasari",
            'country' => "Indonesia",
            'city' => "Medan",
            'regency' => "Perbaungan",
            'postal_code' => "20986",
            'address' => "Jl. Pancing Indah No.76C",
            'phone_number' => "089978651990",
            'shipping_method' => "J&T"
        ]);
    }
}
