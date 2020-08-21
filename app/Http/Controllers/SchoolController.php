<?php

namespace App\Http\Controllers;

use App\School;
use Illuminate\Http\Request;
use App\Http\Requests\SaveSchoolRequest;
use App\Http\Controllers\Session;

class SchoolController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show');

    }




    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $school = School::latest()->paginate();

        return view('schools.index', compact('school'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('schools.create', [
            'school' => new School
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SaveSchoolRequest $request)
    {

        School::create( $request->validated() );

        return redirect()->route('schools.index')->with('status', __('Colegio creado con éxito'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(School $school)
    {

        return view('schools.show', [
            'school' => $school
        ]);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(School $school)
    {
        return view('schools.edit', [
            'school' => $school
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(School $school, SaveSchoolRequest $request)
    {
        $school->update( $request->validated() );

        return redirect()->route('schools.show', $school)->with('status', __('Colegio actualizado correctamente'));


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(School $school)
    {
        $school->delete();
        return redirect()->route('schools.index')->with('status', __('Colegio borrado'));
    }





    public function uploadFile(Request $request){

        if ($request->input('submit') != null ){

           $file = $request->file('file');

           // File Details
           $filename = $file->getClientOriginalName();
           $extension = $file->getClientOriginalExtension();
           $tempPath = $file->getRealPath();
           $fileSize = $file->getSize();
           $mimeType = $file->getMimeType();

           // Valid File Extensions
           $valid_extension = array("jpg","jpeg","png");

           // 2MB in Bytes
           $maxFileSize = 2097152;

           // Check file extension
           if(in_array(strtolower($extension),$valid_extension)){

             // Check file size
             if($fileSize <= $maxFileSize){

                // File upload location
                $location = 'images';

                // Upload file
                $file->move($location,$filename);

                // Session::flash('message','Upload Successful.');
             }else{
                // Session::flash('message','File too large. File must be less than 2MB.');
             }

           }else{
              // Session::flash('message','Invalid File Extension.');
           }

         }

         // Redirect to index
         return redirect()->action('PagesController@index');
      }
}


