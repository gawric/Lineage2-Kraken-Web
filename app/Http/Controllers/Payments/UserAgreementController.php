<?php

namespace App\Http\Controllers\Payments;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class UserAgreementController extends Controller
{
    public function __invoke(): View
    {
        return view('l2page_user_agreement​');
    }
}
