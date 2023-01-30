<?php
  
namespace App\Http\Controllers\Lineage2;

use App\Http\Controllers\Controller;
use Response;
  
use Illuminate\Http\Request;
use App;
use Config;




class RegistrationController extends Controller
{


    public function __construct()
    {

    }

    public function index()
    {
        return view('l2page_registration');
    }
  

   
}