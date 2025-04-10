<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\ModifyUserRequest;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("users.list", ["users" => User::paginate(10)]);
    }

    public function create(){
        return view("users.create");
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateUserRequest $request)
    {
        $validated = $request->validated();
        $validated["password"] = bcrypt("password");
        $user = User::create($validated);
        $user->syncRoles([$validated["role"]]);
        return redirect()->route("user.list")->with(["success" => "L'utilisateur $user->name à bien été créé !"]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        
    }

    public function edit(User $user){
        return view("users.edit", ["user" => $user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ModifyUserRequest $request, User $user)
    {
        $validated = $request->validated();

        $user->name = $validated["name"];
        $user->email = $validated["email"];

        $user->syncRoles([$validated["role"]]);

        $user->save();

        return redirect()->route("user.list")->with(["success" => "L'utilisateur $user->name à bien été modifié !"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        User::destroy($user->id);
        return redirect()->route("user.list")->with(["success" => "L'utilisateur $user->name à bien été supprimé !"]);
    }
}
