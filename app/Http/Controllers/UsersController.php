<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Response;
use App\Models\Users;
use Inertia\Inertia;

class UsersController extends Controller
{
    public function users (Request $request): Response
    {
        $users = Users::all();

        return Inertia::render('Dashboard', compact('users'));
    }
}
