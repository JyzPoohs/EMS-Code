<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Hash;

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


    public function destroy($id)
    {
        User::find($id)->delete();

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
        $user->password = bcrypt($request->password);
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

    // public function doLogin(Request $request)
    // {
    //     $request->validate(
    //         [
    //             'role' => 'required',
    //             'ic' => 'required|unique:users|max:12',
    //             'password' => 'required|min:6|max:12',
    //         ]
    //     );

    //     $check = $request->only('role', 'ic', 'password');
    //     if (Auth::guard('web')->attempt($check)) {
    //         return redirect()->route('user.profile')->with('success', 'Login success');
    //     } else {
    //         return redirect()->back()->with('fail', 'Login fail');
    //     }
    // }

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

        return redirect()->route('staff.userProfielList')
            ->with('updated', 'User updated successfully!');
    }

    public function profile()
    {
        $user = User::find(auth()->user()->id);

        return view('manageUserProfile.profile', compact('user'));
    }

    public function profileView($id)
    {
        $user = User::find($id);

        return view('manageUserProfile.viewUserProfile', compact('user'));
    }

    public function profileUpdateView($id)
    {
        $user = User::find($id);

        return view('manageUserProfile.editUserProfile', compact('user'));
    }

    public function profileUpdate(Request $request, $id)
    {
        // $request->validate([
        //     'ic' => 'required|digits:12|unique:users,ic,' . $id,
        //     'id' => 'required|unique:users,id,' . $id,
        //     'email' => 'required|email|unique:users,email,' . $id,
        //     'name' => 'required|string',
        //     'phone' => 'required|digits_between:10,15|numeric',
        //     'gender' => 'required|in:male,female',
        // ]);

        $user = User::findOrFail($id);

        $user->update($request->all());

        return redirect()->route('staff.userProfileList')->with('updated', 'User updated successfully!');
    }

    public function userProfileList()
    {
        #Retrieve the necessary data
        $users = User::orderBy('created_at', 'desc')
            ->paginate(10);


        # Pass the report data to a view for rendering
        return view('manageUserProfile.userProfileList', compact('users'));
    }

    // public function show()
    // {
    //     return view('module1.viewUser');
    // }
}
