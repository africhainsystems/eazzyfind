<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Subscriber;
use App\Models\Listing;
use App\Models\Vendor;
use App\Models\Blog;
use Carbon\Carbon;

class AdminDashboard extends Controller
{
    //Index
    public function index(){
        $allusers = User::latest()->count();
        $bannedusers = User::where('status', 1)->count();
        $todayusers = User::whereDate('created_at', Carbon::today())->count();
        $subscribers = Subscriber::count();
        $totallistings = Listing::count();
        $bannedtotallistings = Listing::where(['visibility' => 0, 'status' => 0])->count();
        $pendinglistings = Listing::where(['visibility' => 0, 'status' => 1])->count();
        $todaylistings = Listing::whereDate('created_at', Carbon::today())->where(['visibility' => 1, 'status' => 1])->count();
        $providers = Vendor::count();
        $pendingproviders = Vendor::where(['verified' => 0, 'status' => 1])->count();
        $bannedproviders = Vendor::where(['verified' => 1, 'status' => 0])->count();
        $blog = Blog::count();

        $recentproviders = Vendor::where(['verified' => 0, 'status' => 1])->limit(5)->get();

        return view('admin.dashboard', compact('allusers', 'bannedusers', 'todayusers', 'subscribers', 'totallistings','bannedtotallistings', 'pendinglistings', 'todaylistings', 'providers', 'blog', 'pendingproviders', 'bannedproviders', 'recentproviders'));
    }
}
