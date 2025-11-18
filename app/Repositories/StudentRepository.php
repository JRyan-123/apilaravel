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
     * find student by ID
     *
     * @param integer $id
     * @return Model
     */
    public function getById(int $id)
    {
        return $this->student->findOrFail($id);
    }

    public function createNewStudent(array $data)
    {
        return $this->student->create($data);
    }
}
