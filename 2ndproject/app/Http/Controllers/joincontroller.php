<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\joincontroller;
use App\Models\join;

class joincontroller extends Controller
{
    public function show()
    {
        return join::find(2);
    }
}
