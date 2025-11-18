<?php

namespace App\Interfaces;

use App\Models\Student;

interface StudentInterface
{
    public function getAll();
    public function create(array $data);
    public function update(Student $student, array $data);
    public function delete(Student $student);
    
}
