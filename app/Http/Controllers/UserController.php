<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Auth;
use Hash;

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
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = User::find($id)->toArray();

        return view('user.edit', compact('data'));
    }


    public function destroy($user)
    {
        User::find($user)->delete();

        return response()->json(['success' => true]);
    }

    public function create(Request $request)
    {
        $request->validate(
            [
                'ic' => 'required|unique:users|max:12',
                'name' => 'required',
                'gender' => 'required',
                'phone' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required|min:6|max:12',
                'cpassword' => 'required|same:password'
            ],
            [
                'cpassword.same' => 'The password must be same'
            ]
        );
        $user = new User();
        $user->ic = $request->ic;
        $user->name = $request->name;
        $user->gender = $request->gender;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $res = $user->save();

        if ($res) {
            return redirect()->back()->with('success', 'Registered success');
        } else {
            return redirect()->back()->with('fail', 'Registered fail');
        }

        // $request->merge([
        //     'password' => bcrypt('password')
        // ]);

        // User::create($request->all());

        // return redirect()->route('user.index')
        //     ->with('success', "User Successfully Added");
    }

    public function doLogin(Request $request)
    {
        $request->validate(
            [
                'role' => 'required',
                'ic' => 'required|unique:users|max:12',
                'password' => 'required|min:6|max:12',
            ]
        );

        $check = $request->only('role', 'ic', 'password');
        if (Auth::guard('web')->attempt($check)) {
            return redirect()->route('user.profile')->with('success', 'Login success');
        } else {
            return redirect()->back()->with('fail', 'Login fail');
        }
    }

    public function store(Request $request)
    {
        $request->merge([
            'password' => bcrypt('password')
        ]);

        User::create($request->all());

        return redirect()->route('user.index')
            ->with('success', "User Successfully Added");
    }

    public function update(Request $request, $user)
    {
        User::find($user)->update($request->all());

        return redirect()->route('user.index')
            ->with('success', "User Successfully Updated");
    }

    public function profile()
    {
        $user = User::find(auth()->user()->id);

        return view('manageUserProfile.profile', compact('user'));
    }

    // public function profileView($id)
    // {
    //     $user = User::with(['role', 'posts', 'likes'])->find($id);

    //     return view('module2.user-profile-view', compact('user'));
    // }

    public function profileUpdate(Request $request)
    {
        $user = User::find(auth()->user()->id);

        $user->update($request->all());

        return redirect()->back()->with('success', "Profile Successfully Updated!");
    }

    // public function show()
    // {
    //     return view('module1.viewUser');
    // }
}
