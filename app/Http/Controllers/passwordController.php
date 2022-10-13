<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class passwordController extends Controller
{
    public function index(Request $request)
    {
        $subquery =  "SELECT pass from indab_password";
        $data = collect(DB::select(DB::raw($subquery)));
        return $request->password === "123" ? 1 : 0;
    }
}
