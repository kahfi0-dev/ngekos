<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BoardingHouseController extends Controller
{
    public function show()
    {
        return view('pages.boarding-house.show');
    }

    public function rooms()
    {
        return view('pages.boarding-house.rooms');
    }

    public function find()
    {
        return view('pages.boarding-house.find');
    }
}
