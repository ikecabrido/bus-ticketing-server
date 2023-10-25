<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illluminate\Support\Facades\Route;
use App\Http\Resources\ReservationResource;
use App\Models\Reservation;
use App\Models\Bus;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return ReservationResource::collection(Reservation::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $reservation = Reservation::create($request->all());

        if ($reservation) {
            return response([
                'message' => 'Successfully made a reservation!'
            ], 201);
        }else {
            return response([
                'message' => 'Unsuccessful reservation!'
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $reservation = Reservation::find($id);

        if (!$reservation) {
            return response([
                'message' => 'Reservation Not Found'
            ], 400);
        }

        return response([
            'reservation' => $reservation 
        ], 200);
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
