<?php
namespace App\Repositories\client;

use App\Models\User;
use App\Repositories\Repository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthRepository  extends Repository
{
    public function register(Request $request)
    {   
        $data = $request->safe()->only(['email', 'password']);

        User::create($data);
    }

    public function login(Request $request)
    {
        $credentials = $request->safe()->only(['email', 'password']);

        if (Auth::attempt($credentials)) {
            return true;
        }
 
        return false;
    }
}