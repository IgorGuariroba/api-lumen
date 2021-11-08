<?php

namespace App\Http\Controllers;

use App\Serie;
use Laravel\Lumen\Routing\Controller as ControllerAlias;

class SeriesController extends ControllerAlias
{
    public function index()
    {
        return Serie::all();
    }
}
