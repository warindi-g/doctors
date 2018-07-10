<?php

namespace App\Http\Controllers;

use App\Doctors;
use Illuminate\Http\Request;
use App\Http\Resources\DoctorsResource;
use App\Http\Resources\DoctorsCollection;

class DoctorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Doctors $doctors)
    {
        
    }
    
    
    public function index(){
        return new DoctorsCollection(
            DoctorsResource::collection(
                Doctors::all()
            )
        );
    }
    
}
