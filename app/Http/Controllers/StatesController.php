<?php

namespace CEstados\Http\Controllers;

use CEstados\Http\Requests\AdminStatesRequest;
use CEstados\Repositories\StatesRepository;
use Illuminate\Http\Request;

use CEstados\Http\Requests;
use CEstados\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class StatesController extends Controller
{
    /**
     * @var StatesRepository
     */
    private $repository;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct ( StatesRepository $repository )
    {

        $this->repository = $repository;
    }

    public function index()
    {
        $states = $this->repository->paginate(5);

        return view('admin.states.index', compact('states'));
    }


    public function create()
    {
        return view('admin.states.create');
    }


    public function store(AdminStatesRequest $request)
    {
        $data = $request->all();
        $this->repository->create($data);

        return redirect()->route('admin.states.index');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $state = $this->repository->find($id);

        return view('admin.states.edit', compact('state'));
    }


    public function update( AdminStatesRequest $request, $id)
    {
        $data = $request->all();
        $this->repository->update($data, $id);

        return redirect()->route('admin.states.index');
    }


    public function destroy($id)
    {
        $this->repository->delete($id);
        return redirect()->route('admin.states.index');
    }

    public function ajaxAdd ( AdminStatesRequest $request )
    {
        $dados = $request->all();
        $this->repository->create($dados);
    }


}
