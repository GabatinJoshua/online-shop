<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Facades\Request;
use App\Models\User;

class HomeController extends Controller{
    public function index(){
        return view("home.homepage");
    }
}

?>