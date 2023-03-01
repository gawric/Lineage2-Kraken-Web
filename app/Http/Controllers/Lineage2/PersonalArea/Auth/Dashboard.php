<?php
  
namespace App\Http\Controllers\Lineage2\PersonalArea\Auth;

 use App\Http\Controllers\Controller;

class Dashboard extends Controller
{
    public function __construct()
    {
 
    }

    public function index()
    {
        
        return view('dashboard');
    }


   
   
}