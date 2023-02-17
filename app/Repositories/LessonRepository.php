<?php

namespace App\Repositories;

use App\Models\Lesson;

class LessonRepository
{
    protected $entity;

    public function __construct(Lesson $model)
    {
        $this->entity = $model;
    }

    public function getLessonsByModuleId(string $moduleId)
    {
        $lesson =  $this->entity->where('module_id', $moduleId)->get();
        return $lesson;
    }

    public function getLessonById(string $id)
    {
        $lesson = $this->entity->findOrFail($id);
        return $lesson;
    }

    
}