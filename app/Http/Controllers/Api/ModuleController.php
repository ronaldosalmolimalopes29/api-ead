<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ModuleResource;
use App\Repositories\ModuleRepository;
use Illuminate\Http\Request;

class ModuleController extends Controller
{
    protected $repository;

    public function __construct(ModuleRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index($courseId)
    {
        $courses = $this->repository->getModuleByCourseId($courseId);
        return ModuleResource::collection($courses);
    } 

    public function show($id)
    {
        $course = $this->repository->show($id);
        return new ModuleResource($course);
    }
}