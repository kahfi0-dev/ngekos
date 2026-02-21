<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CityController extends Controller
{
    public function show()
    {
        $boardingHouses = [
            [
                'name' => 'Tumbuh Tentram Berada Rumah Nenek',
                'city' => 'Singapore City',
                'type' => 'In Hotels',
                'capacity' => '4 People',
                'price' => 'Rp 4.593.444',
                'thumbnail' => 'assets/images/thumbnails/kos-1.png',
            ],
            [
                'name' => 'Cozy Studio Apartment',
                'city' => 'Jakarta',
                'type' => 'Apartments',
                'capacity' => '2 People',
                'price' => 'Rp 2.500.000',
                'thumbnail' => 'assets/images/thumbnails/kos-2.png',
            ],
            [
                'name' => 'Modern Shared Living',
                'city' => 'Bandung',
                'type' => 'Flats',
                'capacity' => '6 People',
                'price' => 'Rp 3.200.000',
                'thumbnail' => 'assets/images/thumbnails/kos-3.png',
            ],
            [
                'name' => 'Luxurious Villa Stay',
                'city' => 'Bali',
                'type' => 'Villas',
                'capacity' => '8 People',
                'price' => 'Rp 5.000.000',
                'thumbnail' => 'assets/images/thumbnails/kos-4.png',
            ],
        ];

        return view('pages.city.show', compact('boardingHouses'));
    }
}
