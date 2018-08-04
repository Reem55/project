<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
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

        $forms = Form::paginate(15);

        // Return collection of forms as a resource

       return FormResource::collection($forms);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        $form = $request->isMethod('put') ? Form::FindOrFail
        ($request->form_id) : new Form;
        $form->id = $request->input('form_id');
        $form->first name = $request->input('first name');
        $form->last name = $request->input('last name');
        $form->email = $request->input('email');
        $form->subject = $request->input('subject');
        $form->description = $request->input('description');
        if($form->save()){
            return new FormResource($form);
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
       $form = Form::findOrFail($id);
       //Return single form as a resource

        return new FormResource($form);
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $form = Form::findOrFail($id);
        if ($form->delete()) {
            return new FormResource($form);
        }
    }
}
