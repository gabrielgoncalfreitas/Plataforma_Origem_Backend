<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TicketsController extends Controller
{
    public function criarTicket(Request $request)
    {
        return response()->json($request->all());
    }
}
