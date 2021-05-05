<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Permission\Models\Role;
use App\User;
use Illuminate\Support\Str;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('haveaccess','user.index');

        $users = User::with('roles')->orderBy('id','Desc')->paginate(10);

        return view('user.index', compact('users'));
    }

    public function Qr($name)
    {
        $user = User::where('name', $name)->first();

        return view('qr', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$this->authorize('create', User::class);
        //return 'Create';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $this->authorize('view', [$user, ['user.show','userown.show']]);

        $roles = Role::orderBy('name')->get();
        //$url = Str::slug(public_path($user->name));
        $name = Str::slug($user->name);
        $url = ('https://codefacil.com/'.$name);

        return view('user.view', compact('roles', 'user', 'url', 'name'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $this->authorize('update', [$user, ['user.edit','userown.edit']]);

        $roles = Role::orderBy('name')->get();

        return view('user.edit', compact('roles', 'user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name'          => 'required|max:50|unique:users,name,'.$user->id,
            'email'         => 'required|max:50|unique:users,email,'.$user->id,
            'file'          => 'mimetypes:application/pdf|max:10000'.$user->id
        ]);

        //$user->update($request->all());
        
        if ($request->hasFile('file')){
				$request->validate([
				'name'          => 'required|max:50|unique:users,name,'.$user->id,
				'email'         => 'required|max:50|unique:users,email,'.$user->id,
				'file'          => 'mimetypes:application/pdf|max:10000'.$user->id
			]);
            //$file           = $request->file("file");
            //$ext = $file->getClientOriginalExtension();
            //$nombreImg = $request->file('file')->getClientOriginalName();
            //$file = $request->file('file')->storeAs('/user/images/', $nombreImg);
            //$nombrearchivo  = str_slug($request->slug).".".$file->getClientOriginalExtension();
            //$nombrearchivo  = $file->getClientOriginalName();
            $nombrearchivo = Str::slug($request->input('name'));
            $nombrearchivo = $nombrearchivo.'.pdf';
            //$file = 'images/clients/'.$nombrearchivo.'.'.$ext;
            $file = $request->file('file')->storeAs('/images/clients', $nombrearchivo);
            //$file = 'app/'.$file;
            //$file->move(public_path("/images/clients/"));
            $user->file      = $file;
            
        }
        
        $roles = Role::orderBy('name')->get();
		$name = $request->input('name');
        $nameSlug = Str::slug($request->input('name'));
        $url = ('https://codefacil.com/'.$nameSlug);
        $user->name = $nameSlug;
        $user->email = $request->input('email');

        $user->save();
        

        //$user->roles()->sync($request->get('roles'));

        return view('user.view', compact('roles', 'user', 'url', 'name'))->with('status_success','Usuario modificado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $this->authorize('haveaccess','user.destroy');

        $user->delete();

        return redirect()->route('user.index')->with('status_success','Usuario eliminado correctamente');
    }
}
