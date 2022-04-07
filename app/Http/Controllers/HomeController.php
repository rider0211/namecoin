<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function order(Request $req)
    {
        $name = $req->input('name');
        $result = shell_exec('node -v');
        echo $result;
        
        // return redirect()->back();
    }
    public function main(Request $req)
    {
        return view('main');
    }

    public function regist_wallet(Request $req){
        echo "success";
    }
    public function findDomainName(Request $req){
        echo "success";
    }
    public function validateTwitterName(Request $req){
        echo "success";
    }
    public function confirmEmail(Request $req){
        echo "success";
    }
    
}
