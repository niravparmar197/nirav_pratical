<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Form;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $form= new Form();

        $input = $request->all();


        $form->name=$request->get('name');
        $form->email=$request->get('email');
        $form->number=$request->get('number');
        $form->minlength=$request->get('minlength');
        $form->maxlength=$request->get('maxlength');
        $form->range=$request->get('range');
        $form->minvalue=$request->get('minvalue');
        $form->maxvalue=$request->get('maxvalue');
        $form->url=$request->get('url');
        
        if($request->hasFile('filename')) {
            $file = $request->file('filename');
            $filename = "images/".$file->getClientOriginalName();
            $file->move($filename);
            $form->filename = $filename;
        }
        $form->save();
        return response()->json(["success"=>true,"message"=>"Data has been added"]);
        // return redirect('forms')->with('success', 'Data has been added');    
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
        //
    }
}
