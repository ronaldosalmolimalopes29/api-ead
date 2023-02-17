<?php

namespace App\Repositories;

use App\Models\Module;

class ModuleRepository
{
    protected $entity;

    public function __construct(Module $model)
    {
        $this->entity = $model;
    }

    public function getModuleByCourseId(string $courseId)
    {
        $courses =  $this->entity->where('course_id', $courseId)->get();
        return $courses;
    }

    public function show($id)
    {
        $course = $this->entity->findOrFail($id);
        return $course;
    }

    
}