<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Resources\TransactionResource;
use App\Models\Reservation;
use App\Models\Transaction;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return TransactionResource::collection(Transaction::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $transaction = Transaction::create($request->all());

        if ($transaction) {
            return response([
                'message' => 'Transaction successful!'
            ], 201);
        } else {
           return response([
            'message' => 'Transaction failed!'
           ], 500);
        }
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // $transaction = Transaction::find($id);

        // if (!$transaction) {
        //     return response([
        //         'message' => 'Transaction does not exist'
        //     ], 400);
        // };

        // return response([
        //     'transaction' => $transaction
        // ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
