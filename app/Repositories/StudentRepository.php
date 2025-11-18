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
     * fetch all student model
     *
     * @return models
     */
    public function getAll()
    {
        return $this->student->all();
    }
}
