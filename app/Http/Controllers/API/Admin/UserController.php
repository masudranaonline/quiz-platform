<?php

namespace App\Http\Controllers\API\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Traits\HasApiResponse;
use App\Http\Controllers\Controller;

class UserController extends Controller

{
    use HasApiResponse;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::paginate(25);
        
        return $this->successResponse('Users Data Fatched Successfully', $users);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
