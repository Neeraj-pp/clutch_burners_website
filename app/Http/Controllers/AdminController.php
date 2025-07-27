<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Page;
use App\Models\Gallery;

class AdminController extends Controller
{
    // Show login form
    public function loginForm()
    {
        return view('admin.login');
    }

    // Handle login request
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect('/admin/dashboard');
        }

        return back()->withErrors(['email' => 'Invalid credentials']);
    }

    // Logout
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/');
    }

    // Admin Dashboard
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    // Edit Home Page
    public function editHome()
    {
        $page = Page::firstOrCreate(
            ['page_name' => 'home'],
            ['content' => '']
        );
        return view('admin.edit-home', compact('page'));
    }

    public function updateHome(Request $request)
    {
        $page = Page::firstOrCreate(
            ['page_name' => 'home'],
            ['content' => '']
        );
        $page->content = $request->input('content');
        $page->save();

        return redirect('/admin/dashboard')->with('success', 'Home page updated!');
    }

    // Edit Gallery Page
    public function editGallery()
    {
        $images = Gallery::all();
        return view('admin.edit-gallery', compact('images'));
    }



public function updateGallery(Request $request)
{
    if ($request->hasFile('images')) {
        foreach ($request->file('images') as $file) {
            $filename = $file->store('gallery', 'public');
            Gallery::create([
    'image_path' => $filename,
    'description' => $request->input('description'),
    'image_date' => $request->input('image_date'),
]);

        }
    }

    return back()->with('success', 'Gallery updated!');
}



    public function deleteGalleryImage($id)
    {
        $image = Gallery::find($id);
        if ($image) {
            $image->delete();
        }

        return back()->with('success', 'Image deleted!');
    }

    // Edit Contact Page
    public function editContact()
    {
        $page = Page::firstOrCreate(
            ['page_name' => 'contact'],
            ['content' => '']
        );
        return view('admin.edit-contact', compact('page'));
    }

    public function updateContact(Request $request)
    {
        $page = Page::firstOrCreate(
            ['page_name' => 'contact'],
            ['content' => '']
        );
        $page->content = $request->input('content');
        $page->save();

        return redirect('/admin/dashboard')->with('success', 'Contact page updated!');
    }
}
