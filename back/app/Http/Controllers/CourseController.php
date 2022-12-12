<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    function addCourse(Request $req)
    {
        $course = new Course;
        $course->name = $req->input('name');
        $course->price = $req->input('price');
        $course->description = $req->input('description');
        $course->file_path = $req->file('file')->store('courses');
        $course->save();
        return $course;
    }

    function list()
    {
        return Course::all();
    }
}
