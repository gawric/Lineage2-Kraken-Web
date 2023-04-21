<?php

namespace App\Http\Controllers\Payments;

use App\Http\Controllers\Controller;
use Illuminate\View\View;
use Lang;
use Illuminate\Http\Request;
use Response;

class EnotIoTestController extends Controller
{
    public function index(Request $request)
    {
        info("EnotIoTestController>>>>>");
        info($request);

        return Response::json(['success'=>Lang::get('messages.success') , 'result'=>""]);
    }
}
