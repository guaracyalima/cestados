<?php

namespace CEstados\Http\Controllers;

use CEstados\Repositories\UserRepository;
use Illuminate\Http\Request;

use CEstados\Http\Requests;
use CEstados\Http\Controllers\Controller;

class UsersController extends Controller
{

    /**
     * @var UserRepository
     */
    private $repository;

    public function __construct ( UserRepository $repository  )
    {

        $this->repository = $repository;
    }

    public function index()
    {
        $users = $this->repository->paginate(5);

        return view('admin.users.index', compact('users'));
    }


    public function store(Request $request)
    {
        //
    }


    public function edit($id)
    {
        $user = $this->repository->find($id);
        $list_roles = ['common' => 'common', 'admin' => 'admin'];

        return view('admin.users.edit', compact('user', 'list_roles'));
    }


    public function update(Request $request, $id)
    {
        $data = $request->all();

        $this->repository->update($data, $id);

        return redirect()->route('admin.users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->repository->delete($id);
        return redirect()->route('admin.users.index');
    }
}
