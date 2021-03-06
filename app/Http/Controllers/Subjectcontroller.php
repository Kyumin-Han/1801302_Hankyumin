<?php

namespace App\Http\Controllers;

use App\Models\Subjects;
use Illuminate\Http\Request;
use Inertia\Inertia;

class Subjectcontroller extends Controller
{
    public function index() {
        return Inertia::render('Home/SubjectContainer', ['subject'=>Subjects::all()->paginate(1)]);
    }
}
