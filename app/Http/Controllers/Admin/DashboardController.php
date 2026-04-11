<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'total_contacts' => Contact::count(),
            'new_contacts' => Contact::where('status', 'new')->count(),
            'total_users' => User::count(),
        ];

        $recent_contacts = Contact::latest()->limit(5)->get();

        return view('admin.dashboard', compact('stats', 'recent_contacts'));
    }
}
