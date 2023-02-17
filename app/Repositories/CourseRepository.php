<?php

namespace App\Repositories;

use App\Models\Course;

class CourseRepository
{
    protected $entity;

    public function __construct(Course $model)
    {
        $this->entity = $model;
    }

    public function index()
    {
        $courses =  $this->entity->get();
        return $courses;
    }

    public function show($id)
    {
        $course = $this->entity->findOrFail($id);
        return $course;
    }

    
}