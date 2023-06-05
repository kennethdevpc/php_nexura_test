<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $users = User::SimplePaginate(100);
        return view('user.index',compact('users'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
        $roles = Role::all();
        return view('user.edit', compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //llenar la table intermedia

        $e = $user->roles()->sync($request->role);
        return redirect('users')->with('mensaje', '¡Role establecido con exito!');
        return redirect()->route('users.edit')
            ->with('success-update', 'Role establecido con exito');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
        $user->delete();

        return redirect()->action([UserController::class, 'index'])
            ->with('success-delete', 'Usuario eliminado con exito');
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
        return ("hola");
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }


}
