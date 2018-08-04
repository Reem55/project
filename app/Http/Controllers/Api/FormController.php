<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Form;
use App\Http\Resources\Form as FormResource;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //get all the forms

        $forms = Form::paginate();

        // Return collection of forms as a resource

        return FormResource::collection($forms);
    }


    public function create()
    {
        return view('create');
    }


    public function store(Request $request)
    {
        $form = Form::create($request->all());

        return new FormResource($form);

    }

    public function show(Form $form)
    {
        //Return single form as a resource

        return new FormResource($form);
    }


    public function destroy(Form $form)
    {
        $form->delete();

        return response();
    }
}
