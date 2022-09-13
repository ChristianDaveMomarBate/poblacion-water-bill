<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Feedback;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $consumers = User::where('is_admin', '0')->count();
        $feedback = Feedback::count();

        return view('admin.dashboard.index', compact('consumers', 'feedback'));
    }
}
