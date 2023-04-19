<?php

namespace App\Http\Controllers\Payments;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class PrivacyPolicyController extends Controller
{
    public function __invoke(): View
    {
        return view('l2page_privacy_policy');
    }
}
