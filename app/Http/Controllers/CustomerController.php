<?php

namespace CEstados\Http\Controllers;

use CEstados\Repositories\StatesRepository;
use Illuminate\Http\Request;

use CEstados\Http\Requests;
use CEstados\Http\Controllers\Controller;

class CustomerController extends Controller
{


    private $repository;

    public function __construct ( StatesRepository $repository  )
    {

        $this->repository = $repository;
    }

    public function index()
    {
        $states = $this->repository->paginate(3);


        return view('customer.index', compact('states'));
    }



}
