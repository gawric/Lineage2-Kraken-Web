<?php
  
namespace App\Http\Controllers\Lang;
use App\Http\Controllers\Controller;

  
use Illuminate\Http\Request;
use App;
use Config;
  
class LangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
    */
    public function index()
    {
        return view('l2index');
    }
  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
    */
    public function change(Request $request)
    {
        App::setLocale($request->lang);
        session()->put('locale', $request->lang);

        $googleAPIToken = Config::get('lineage2.server.list_server');
        dd($googleAPIToken);

       // dd(session());
        return redirect()->back();
    }
}