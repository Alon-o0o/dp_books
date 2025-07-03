<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function profile()
    {
        $user = Auth::user()->load('purchases');
        return view('profile', compact('user'));
    }
    

    public function uploadPhoto(Request $request)
    {
        $request->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif',
        ]);

        $user = Auth::user();

        // Удалим старое фото, если не дефолтное
        if ($user->photo && !str_contains($user->photo, 'default-avatar.png')) {
            Storage::delete($user->photo);
        }

        $path = $request->file('photo')->store('uploads/avatars', 'public');
        $user->photo = 'storage/' . $path;
        $user->save();

        return redirect()->back()->with('success', 'Фото успешно загружено!');
    }

}
