<?php

namespace App\Interfaces;

interface StudentInterface
{
    public function getAll();
    public function getById(int $id);
    public function createNewStudent(array $data);
    // public function getById();
    // public function getById();
}
