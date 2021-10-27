<?php

namespace App\Http\Controllers;

use App\Models\Subjects;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ApplyController extends Controller
{
    public function index() {
        return Inertia::render('Home/ApplyContainer');
    }

    public function store(Request $request) {
        Subjects::create([
            'name' => $request->name,
            'score' => $request->score,
            'exp' => $request->exp
        ]);


        // return Inertia::render('Home/SubjectContainer');
    }
}
