<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('roles')
        ->join('menus', 'roles.menu', '=', 'menus.id')
        ->select('roles.*', 'menus.menu')
        ->orderBy('roles.id')
        ->get();
        return view('roles.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Menu::all();
        return view('roles.create',['data'=>$data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Role $role)
    {
        $role['id'] = strtolower($request['nama_role'].($request['menu']));
        $role['nama_role'] = $request['nama_role'];
        $role['menu'] = intval($request['menu']);
        $role['tambah'] = $request['tambah'] ?? 0;
        $role['edit'] = $request['edit'] ?? 0;
        $role->save();
        return redirect()->route('roles.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\role  $role
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = DB::table('roles')
        ->join('menus', 'roles.menu', '=', 'menus.id')
        ->select('roles.*', 'menus.menu as menu_desc')
        ->where('roles.id', '=', $id)
        ->get();
        $menu = DB::table('menus')->where('id', '!=', $data[0]->menu)->get();
        return view('roles.edit',['data'=>$data], ['menu'=>$menu]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Role $role)
    {
        $role['nama_role'] = $request['nama_role'];
        $role['menu'] = intval($request['menu']);
        $role['tambah'] = $request['tambah'] ?? 0;
        $role['edit'] = $request['edit'] ?? 0;
        $role->save();
        return redirect()->route('roles.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Role $role)
    {
        //
    }

    public function delete($id)
    {
        Role::destroy($id);
        return redirect()->route('roles.index');
    }
}
