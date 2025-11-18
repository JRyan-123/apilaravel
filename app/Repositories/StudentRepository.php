<?php

namespace App\Repositories;

use App\Interfaces\StudentInterface;
use App\Models\Student;

class StudentRepository implements StudentInterface
{
    /**
     * Create a new class instance.
     */
    public function __construct(protected Student $student) {}

    /**
     * Get all students
     *
     * @return Collection
     */
    public function getAll()
    {
        return $this->student->all();
    }


    /**
     * Create new student record
     *
     * @param array $data
     * @return void
     */
    public function create(array $data)
    {
        return $this->student->create($data);
    }


    /**
     * Update selected record
     *
     * @param Student $student
     * @param array $data
     * @return Model
     */
    public function update(Student $student, array $data)
    {
        $student->update($data);
        return $student;
    }

    public function delete(Student $student)
    {
        return $student->delete();
    }
}
