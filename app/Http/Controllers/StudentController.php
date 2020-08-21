<?php

namespace App\Http\Controllers;

use App\Student;
use App\School;
use Illuminate\Http\Request;
use App\Http\Requests\SaveStudentRequest;

class StudentController extends Controller
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

        $student = Student::latest()->paginate();


        return view('students.index', compact('student'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        $schools = School::pluck('title', 'id')->toArray();

        //return [$schools];

        return view('students.create', [
            'student' => new Student,
            'schools' => $schools
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SaveStudentRequest $request)
    {
        Student::create( $request->validated() );

        return redirect()->route('students.index')->with('status', __('Estudiante creado con éxito'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('students.show', [
            'student' => $student
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        $schools = School::pluck('title', 'id')->toArray();

        return view('students.edit', [
            'student' => $student,
            'schools' => $schools
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Student $student, SaveStudentRequest $request)
    {
        $student->update( $request->validated() );

        return redirect()->route('students.show', $student)->with('status', __('Estudiante actualizado correctamente'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('students.index')->with('status', __('Estudiante borrado'));
    }
}
