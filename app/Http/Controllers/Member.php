<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Member extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = user::all();
        return view('pages.members',[
            'users'=>$users
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.addUser');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'names' => ['required'],
            'email' => ['required', 'email', 'unique:users,email'],
            'fonction' => ['required'],
            'file' => ['required'],
            'password' => ['required','confirmed'],
            'password_confirmation' => ['required'],
            'fbk' => ['required'],
            'twitter' => ['required'],
            'whatsapp' => ['required'],
        ]);

        $filename = time().'.'.$request->file->extension();

        $path = $request->file->storeAs(
            'avatars',
            $filename,
            'public'
        );
       
        User::create([
            'name' => $request->names,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'fonction' => $request->fonction,
            'facebook' => $request->fbk,
            'file' => $path,
            'whatsapp' => $request->whatsapp,
            'tweeter' => $request->twitter,
            'ismemberadmin' => $request->isadmin != null ? 1 : 0,
        ]);

        return redirect()->route('members.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrfail($id);
        return view('pages.editUser',[
            'user' => $user
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'names' => ['required'],
            'email' => ['required', 'email', 'unique:users,email,'.$id],
            'fonction' => ['required'],
            'file' => ['required'],
            'password' => ['required','confirmed'],
            'password_confirmation' => ['required'],
            'fbk' => ['required'],
            'twitter' => ['required'],
            'whatsapp' => ['required'],
        ]);

        $filename = time().'.'.$request->file->extension();

        $path = $request->file->storeAs(
            'avatars',
            $filename,
            'public'
        );

        User::findOrFail($id)->update([
            'name' => $request->names,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'fonction' => $request->fonction,
            'facebook' => $request->fbk,
            'file' => $path,
            'whatsapp' => $request->whatsapp,
            'tweeter' => $request->twitter,
            'ismemberadmin' => $request->isadmin != null ? 1 : 0,
        ]);

        return redirect()->route('members.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('members.index');
    }

    public function saveUser(Request $request){
        $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email', 'unique:users,email'],
            'file' => ['required'],
            'password' => ['required','confirmed'],
            'password_confirmation' => ['required'],
        ]);

        $filename = time().'.'.$request->file->extension();

        $path = $request->file->storeAs(
            'avatars',
            $filename,
            'public'
        );
       
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'file' => $path,
            'fonction' => 'other',
        ]);

        if(auth()->attempt($request->only('email','password'))){
            $request->session()->regenerate();
            return redirect()->route('pub.index');
        }

        return back()->withErrors(['ces identifiants ne sont pas reconnus'])->onlyInput('email');
    }
}
