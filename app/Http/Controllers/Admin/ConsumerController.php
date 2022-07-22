<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;

class ConsumerController extends Controller
{
    public function index()
    {
        $consumers = User::where('is_admin', '0')
            ->orderBy('id', 'ASC')
            ->get();

        return view('admin.consumers.index', compact('consumers'));
    }
}
