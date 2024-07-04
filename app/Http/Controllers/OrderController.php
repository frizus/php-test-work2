<?php

namespace App\Http\Controllers;

use App\Http\Resources\OrderGetResponse;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     * TODO Накостылено, чтобы смотреть список
     */
    public function index()
    {
        return OrderGetResponse::collection(Order::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    public function assign(Request $request)
    {
        //
    }

    public function complete(Request $request)
    {
        //
    }
}
