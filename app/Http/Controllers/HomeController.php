<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

    /*
    Raw PHP
    ------------
    $select_query = "SELECT * FROM users";
    $data_from_db = mysqli_query($db_connec, $select_query);
    print_r($data_from_db);

    */

    // Laravel

    $users = User::simplePaginate(3);

    // $name = User::select('name')->get();
    // $age = 2000;
    //$gender = 'Male';

    $cars = ['BMW', 'toyota', 'audi', 'ferrari'];
    return view('home', compact("cars","users"));
    }
}
