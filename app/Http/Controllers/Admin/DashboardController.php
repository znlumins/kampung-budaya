<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Panggil view dashboard yang baru kita buat
        return view('admin.dashboard');
    }
}