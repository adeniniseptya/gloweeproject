<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Assessment;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index(){
        $views = 12840; // nanti bisa ganti dinamis dengan analytics
        $totalAssessments = Assessment::count();
        $activeUsers = 482; // contoh dummy
        $recentAssessments = Assessment::latest()->limit(5)->get();
        return view('admin', compact('views','totalAssessments','activeUsers','recentAssessments'));
    }

    public function profile(){
        $activities = session('activity_log', [
            ['text'=>'Logged In', 'time'=>'Today 08:03'],
            ['text'=>'Viewed Assessment Results','time'=>'Today 14:32'],
            ['text'=>'Updated User Database','time'=>'Today 10:11'],
        ]);
        return view('adminprofile', compact('activities'));
    }
}
