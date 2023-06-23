<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthDashboardController extends Controller
{
    public function index() {
        $dashboard = "dashboard List form in dashboardController";
        return view("dashboard.index", ['dashboard' => $dashboard]);
    }
}
