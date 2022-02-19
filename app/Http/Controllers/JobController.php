<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class JobController extends Controller
{
    public function index()
    {
        return view('beranda', [
            "title" => "Beranda",
            "active" => 'beranda',
            "jobs" => Job::latest()->filter(request(['search']))->paginate(6)->withQueryString()
        ]);
    }

    public function show(Job $job)
    {
        return view('detail', [
            "title" => "Detail",
            "active" => "beranda",
            "job" => $job,
            "jobs" => Job::latest()->get()
        ]);
    }
}
