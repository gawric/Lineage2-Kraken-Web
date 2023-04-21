<?php

namespace App\Http\Controllers\Payments;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class PagesAlertSuccessController extends Controller
{
    public function __invoke(): View
    {
        return view('page_payments_success');
    }

  
}
