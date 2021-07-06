<?php

namespace App\Http\Controllers;

use App\Models\Users;
use App\Models\States;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        $users = Users::latest()->paginate(10);
        $states = States::getStates();

        return view('Users.Index', compact('users', 'states'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $states = States::getStates();
        return view('Users.Create', compact('states'));
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
            'name' => 'required',
            'birth' => 'required',
            'gender' => 'required'
        ], [
            'name.required' => 'O campo Nome é obrigatório!',
            'birth.required' => 'O campo Data de Nascimento é obrigatória!',
            'gender.required' => 'O campo Sexo é obrigatório!'
        ]);

        Users::create($request->all());

        return redirect()->route('users.index')
            ->with('success', 'Usuário criado com sucesso.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = Users::find($id);
        $states = States::getStates();
        return view('Users.Show', compact('user', 'states'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = Users::find($id);
        $states = States::getStates();
        return view('Users.Edit', compact('user', 'states'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'birth' => 'required',
            'gender' => 'required'
        ], [
            'name.required' => 'O campo Nome é obrigatório!',
            'birth.required' => 'O campo Data de Nascimento é obrigatória!',
            'gender.required' => 'O campo Sexo é obrigatório!'
        ]);

        $user = Users::find($id);
        $user->update($request->all());

        return redirect()->route('users.index')
            ->with('success', 'Usuário atualizado com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $users = Users::find($id);
        $users->delete();

        return redirect()->route('users.index')
            ->with('success', 'Usuário excluído com sucesso');
    }
}
