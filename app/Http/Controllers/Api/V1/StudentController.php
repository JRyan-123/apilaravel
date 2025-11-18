<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use App\Http\Resources\StudentResource;
use App\Interfaces\StudentInterface;
use App\Traits\ApiResponseTrait;

class StudentController extends Controller
{
    use ApiResponseTrait;
    
    // inject student interface
    public function __construct(protected StudentInterface $student) {
        
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $student_data = $this->student->getAll();
        return $this->success(StudentResource::collection($student),'Fetch all data successfully');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreStudentRequest $request)
    {
        $student_data = $this->student->create($request->validated());
        return $this->success(new StudentResource($student), 'Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
         return $this->success(new StudentResource($student), 'Student fetch successfully');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStudentRequest $request, Student $student)
    {
        $student_data = $this->student->update($student, $request->validated());
        return $this->success(new StudentResource($student), 'Student updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        //
    }
}
