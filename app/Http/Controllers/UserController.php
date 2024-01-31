<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserEditRequest;
use App\Models\User;
use Spatie\Permission\Models\Role;


class UserController extends Controller
{
    public function index()
    {
       // abort_if(Gate::denies('user_index'), 403);
        $users = User::paginate(5);
        return view('users.index', compact('users'));
    }

    public function create()
    {
      //  abort_if(Gate::denies('user_create'), 403);
        $roles = Role::all()->pluck('name', 'id');
       // dd($roles);
        return view('users.create', compact('roles'));
    }

    public function store(UserCreateRequest $request)
    {

        $user = User::create($request->only('rut','name','apellidos','email')
            + [
                'password' => bcrypt($request->input('password')),
            ]);

        $roles = $request->input('roles', []);

        //$user->roles()->sync($request->input('roles' ,[]));

        return redirect()->route('users.show', $user->id)->with('success', 'Usuario creado correctamente');
    }

    public function show(User $user)
    {
       // abort_if(Gate::denies('user_show'), 403);
        // $user = User::findOrFail($id);
        // dd($user);
        $user->load('roles');
        return view('users.show', compact('user'));
    }

    public function edit(User $user)
    {
     //   abort_if(Gate::denies('user_edit'), 403);
        $roles = Role::all()->pluck('name', 'id');
        $user->load('roles');
        return view('users.edit', compact('user', 'roles'));
    }

    public function update(UserEditRequest $request, User $user)
    {
        $data = $request->only('rut','name','apellidos','email');
        $password=$request->input('password');
        if($password)
        $data['password'] = bcrypt($password);
        $user->update($data);
        $roles = $request->input('roles', []);
      //  $user->syncRoles($roles);
        $user->roles()->sync($request->input('roles' ,[]));

        return redirect()->route('users.index', $user->id)->with('success', 'Usuario actualizado correctamente');
    }

    public function destroy(User $user)
    {
       // abort_if(Gate::denies('user_destroy'), 403);

        if (auth()->user()->id == $user->id) {
            return redirect()->route('users.index');
        }

        $user->delete();
        return back()->with('succes', 'Usuario eliminado correctamente');
    }
}
