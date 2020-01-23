<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class get extends Controller
{
    public function getTypes()
    {
        return view('types');
    }

}
