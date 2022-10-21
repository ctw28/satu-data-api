<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;

class MasterController extends Controller
{
    //

    public function index()
    {
        return Role::all();
    }
}
