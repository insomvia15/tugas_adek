<?php

namespace App\Http\Controllers;

use App\Models\biodata;

class BiodataController extends Controller
{
    /**
     * Display a listing of the resource.
     * author lisence ghifar rito
     */
    public function tampil()
    {
        return view("home", [
            "title" => "Home",
            "biodata" => biodata::getBiodata()
        ]);
    }
}