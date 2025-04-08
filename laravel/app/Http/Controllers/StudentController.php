<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use App\Models\Student;
use App\Models\Course;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // render index view
        return view('students.index', [
            'students' => Student::all(), //this is called eloquent which gets all student data and on this view student data is available
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('students.create')->with('courses', Course::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreStudentRequest $request)
    {
        // call model Student and call the create method with the request validated() which validtes the student
        Student::create($request->validated());
        return redirect() -> route('students.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //
        return view('students.edit');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        // compacts converts it to var and sends the data to view
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStudentRequest $request, Student $student)
    {
        $student -> update($request -> validated());
        return redirect() -> route('students.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        Student::destroy($student -> id);
        return redirect() -> route('students.index');
    }
}
