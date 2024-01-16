<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = Users::all();
        return view("home", compact("users"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("form");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = new Users();
        $validated = $request->validate(
            [
                "fname" => "required|regex:/[^\W_]{3,}/",
                "lname" => "required|regex:/[^\W_]{3,}/",
                "email" => "required|email|unique:users,email",
                "address" => "required|regex:/[^\W_]{3,}/",
                "telephone" => "required|regex:/[^\W_]{3,}/",
                "image" => "required|image|mimes:jpeg,jpg,png|max:1024"
            ]
        );
        if (request()->hasFile("image")) {
            $imgPath = request()->file("image")->store("images", "public");
            $validated["image"] = url("storage/" . $imgPath);
        }
        $user->fname = $validated["fname"];
        $user->lname = $validated["lname"];
        $user->email = $validated["email"];
        $user->address = $validated["address"];
        $user->telephone = $validated["telephone"];
        $user->image = $validated["image"];
        $user->save($validated);
        return redirect()->route("users.index")->with("success", "User added successfully!");
    }

    /**
     * Display the specified resource.
     */
    public function show(Users $users)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Users $users, $id)
    {

        $user = Users::find($id);
        return view("edit", compact("user"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Users $users, $id)
    {
        $user = Users::find($id);
        $validated = $request->validate(
            [
                "fname" => "required|regex:/[^\W_]{3,}/",
                "lname" => "required|regex:/[^\W_]{3,}/",
                "email" => "required|email",
                "address" => "required|regex:/[^\W_]{3,}/",
                "telephone" => "required|regex:/[^\W_]{3,}/",
                "image" => "image|mimes:jpeg,jpg,png|max:1024"
            ]
        );
        if (request()->hasFile("image")) {
            $imgPath = request()->file("image")->store("images", "public");
            $validated["image"] = url("storage/" . $imgPath);
            $user->image = $validated["image"];
        }
        $user->fname = $validated["fname"];
        $user->lname = $validated["lname"];
        $user->email = $validated["email"];
        $user->address = $validated["address"];
        $user->telephone = $validated["telephone"];
        $user->save($validated);
        return redirect()->route("users.index")->with("success", "User added successfully!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Users $users)
    {
        //
    }
}
