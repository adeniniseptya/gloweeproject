<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('index'); // resources/views/index.blade.php
    }
    public function about(){
        return view('aboutus');
    }
    public function glowPlan(){
        return view('glowplan');
    }
    public function glowJourney(){
        return view('glowjourney');
    }
}
