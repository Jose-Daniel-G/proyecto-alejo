<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth; // Correct import
class LoginController extends Controller
{
    use AuthenticatesUsers;

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function authenticated(Request $request, $user)
    {
        $notifications = DB::select("SELECT users.id, users.name, users.email, COUNT(is_read) AS unread
                                       FROM users
                                       LEFT JOIN messages ON users.id = messages.from AND messages.is_read = 0
                                       WHERE users.id = " . Auth::id() . "
                                       GROUP BY users.id, users.name, users.email");
        // dd($notifications);
        session(['notifications' => $notifications]);

        return redirect('/home');
    }
}
