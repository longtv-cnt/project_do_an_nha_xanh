<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    private $user;
    private $role;
    public function __construct(User $user, Role $role)
    {
        $this->user = $user;
        $this->role = $role;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // get all users by get() method
        $users = User::paginate(10);
        $roles = Role::all();
// get user attached roles

        // $userlist = this->user->all();
        //$roles = this->role->all();



        // $rolecon=  DB::table('role_user')
        //     ->join('users', 'users.id', '=', 'role_user.user_id')
        //     ->join('roles', 'role_user.role_id', '=', 'roles.id')
        //     ->select('*', )->pluck('role_id')->toArray();
        // dd($rolecon);

        return view('admin.Users.index', compact('users', 'roles', ));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {
        $roles = Role::all();
        return view('admin.Users.create', compact('roles'));
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all()) ;
        //
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'roles' => 'required',
            'date_of_birth' => 'required',

        ], [
            'name.required' => 'Name is required',
            'email.required' => 'Email is required',
            'email.email' => 'Email is invalid',
            'email.unique' => 'Email is already taken',
            'password.required' => 'Password is required',
            'password.min' => 'Password must be at least 6 characters',
            'roles.required' => 'Roles is required',
            'date_of_birth.required' => 'Date of birth is required',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'ngaysinh' => $request->date_of_birth,
        ]);
        $roles = ($request->roles);
        $user->roles()->attach($roles);


        return redirect()->route('user.index')->with('success', 'User created successfully');
        // return redirect()->route('user.index');
    }




    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $user = User::findOrFail($id);
        $roles = Role::all();
        $roleids = DB::table('role_user')->where('user_id', $id)->pluck('role_id')->toArray();
        if ($user) {
            return view('user.edit', compact('user', 'roles', 'roleids'));
        }
    }
    //



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $id,

            'roles' => 'required',
        ], [
            'name.required' => 'Name is required',
            'email.required' => 'Email is required',
            'email.email' => 'Email is invalid',
            'password.required' => 'Password is required',

            'roles.required' => 'Role is required',
        ]);
        $this->user->findOrFail($id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        //update role_user table
        DB::table('role_user')->where('user_id', $id)->delete();
        foreach ($request->roles as $role) {
            DB::table('role_user')->insert([
                'user_id' => $id,
                'role_id' => $role,
            ]);
        }
        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        //
        $user = User::find($id);
        $user->delete();
        DB::table('role_user')->where('user_id', $id)->delete();
       return redirect()->route('user.index');
    }
}
