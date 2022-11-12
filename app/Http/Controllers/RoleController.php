<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\Permission;
use App\Exceptions\Handler;
use Illuminate\Support\Facades\DB;
class RoleController extends Controller
{
    private $role;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct(Role $role)
    {
        $this->role = $role;
    }

    public function index()
    {
        $roles = $this->role->paginate(10);
        return view('admin.Roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permissions = Permission::all();
        $parents_permissions = Permission::where('parent_id', 0)->get();


        return view('admin.Roles.create', compact('permissions', 'parents_permissions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $role = Role::where('name', '=', $request->name)->first();
        if ($role === null) {
       // user doesn't exist
       $roleCreate= $this->role->create([
            'name'=>$request->name,
            'display_name'=>$request->display_name,
        ]);
        $permissions = $request->permissions;
        if($permissions){
            foreach($permissions as $permission){
                $roleCreate->permission()->attach($permission);
            }
        }
        return redirect()->route('role.index');
        }else{
            return redirect()->back()->with('error', 'Role already exists');
        }
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
        $parents_permissions = Permission::where('parent_id', 0)->get();
        $role = $this->role->find($id);
       // dd($role->permission);
        if($role->permission!=null)
       { $permissionsChecked = $role->permission;
        $permissions = Permission::all();
        return view('.admin.Roles.update', compact('role', 'permissions', 'permissionsChecked', 'parents_permissions'));
       }else{
           $permissionsChecked = [];}
//dd($permissionsChecked);
        $permissionids = DB::table('role_permission')->where('role_id', '=', $id)->pluck('permission_id')->toArray();
        return view('admin.Roles.update', compact('role', 'permissionsChecked','permissionids','parents_permissions'));
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
        //
       // dd($request->all());
        $role = $this->role->find($id);
        $role->name = $request->name;
        $role->display_name = $request->display_name;
        $role->save();
        DB::table('role_permission')->where('role_id', '=', $id)->delete();
        $permissions = $request->permissions;
        foreach ($permissions as $permission) {
            DB::table('role_permission')->insert([
                'role_id' => $role->id,
                'permission_id' => $permission,
            ]);
        }
        return redirect()->route('role.index')->with('success', 'Role updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $role= $this->role->find($id);
        $role->delete();
        DB::table('role_permission')->where('role_id', $id)->delete();
        return redirect()->route('role.index');
        //
    }
}
