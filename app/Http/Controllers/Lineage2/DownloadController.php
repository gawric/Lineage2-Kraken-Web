<?php

namespace App\Http\Controllers\Lineage2;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class DownloadController extends Controller
{
    public function __invoke(): View
    {
        return view('l2page_download');
    }
}
