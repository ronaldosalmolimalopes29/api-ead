<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CourseResource;
use App\Models\Course;
use App\Repositories\CourseRepository;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    protected $repository;

    public function __construct(CourseRepository $repository)
    {
        $this->repository = $repository;
    }
    
    public function index()
    {
        $courses = $this->repository->index();
        return CourseResource::collection($courses);
    } 

    public function show($id)
    {
        $course = $this->repository->show($id);
        return new CourseResource($course);
    }
}