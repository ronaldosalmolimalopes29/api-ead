<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\LessonResource;
use App\Repositories\LessonRepository;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    protected $repository;

    public function __construct(LessonRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index($moduleId)
    {
        $lessons = $this->repository->getLessonsByModuleId($moduleId);
        return LessonResource::collection($lessons);
    }

    public function show($lessonId)
    {
        $lesson = $this->repository->getLessonById($lessonId);
        return new LessonResource($lesson);
    }
}