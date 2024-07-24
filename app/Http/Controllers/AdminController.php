<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admins = DB::table("admins")->get();
        return view('admins.index', compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admins.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $image_data = $request->file("image");
        $iamge_name = rand(0, 255) . $image_data->getClientOriginalName();
        $location = public_path('upload/');
        $image_data->move($location, $iamge_name);

        DB::table('admins')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'image' => $iamge_name,
            'password' => bcrypt($request->password), // تأكد من تشفير ك
        ]);
        return redirect()->back()->with('done', "Create Admin Successfuly");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        $admin = DB::table('admins')->where('id', '=', $id)->first();
        return view('admins.show', compact('admin'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $admin = DB::table('admins')->where('id', '=', $id)->first();
        return view('admins.edit', compact('admin'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $admin = DB::table('admins')->where('id', '=', $id)->first();



        $image_data = $request->file("image");
        if ($image_data == null) {
            $iamge_name = $admin->image;
        }else{
            $iamge_name = rand(0, 255) . $image_data->getClientOriginalName();
            $location = public_path('upload/');
            $image_data->move($location, $iamge_name);
        }


        DB::table('admins')->where('id', '=', $id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'image' => $iamge_name,
            'password' => bcrypt($request->password), // تأكد من تشفير ك
        ]);
        return redirect()->route('admin.index')->with('done', "Updated Admin Successfuly");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $admin = DB::table('admins')->where('id', '=', $id)->delete();
        return redirect()->route('admin.index')->with('done', "Deleted Admin Successfuly");
    }
}
