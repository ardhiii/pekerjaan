<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Cviebrock\EloquentSluggable\Services\SlugService;

class DashboardJobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.index', [
            'jobs' => Job::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.create', [
            'active' => 'unggah',
            'title' => 'Unggah'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'job_type' => 'required|max:255',
            'title' => 'required|max:255',
            'name' => 'required|max:255',
            'registration_time' => 'required|max:255',
            'slug' => 'required|unique:jobs',
            'method' => 'required|max:255',
            'loc' => 'required|max:25|max:255',
            'logo' => 'image|file|max:2048|required',
            'company_type' => 'max:255',
            'education' => 'max:255',
            'major' => 'max:255',
            'criteria' => '',
            'description' => '',
            'apply' => 'required',
            'source' => 'required',
            'cp' => 'max:255',
            'legal_name' => 'max:255',
            'address' => '',
            'district' => 'max:255',
            'city' => 'max:255',
            'province' => 'max:255',
            'employees' => 'max:255',
            'flyer' => 'image|file|max:5120'
        ]);

        $validatedData['logo'] = $request->file('logo')->store('job-logos');
        if($request->file('flyer')) {
            $validatedData['flyer'] = $request->file('flyer')->store('job-flyer');
        }
        $validatedData['user_id'] = auth()->user()->id;

        Job::create($validatedData);

        return redirect('/dashboard')->with('success', 'Info lowongan baru sukses ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function show(Job $job)
    {
        if($job->user_id !== auth()->user()->id) {
            abort(403);
       }

        return view('dashboard.show', [
            "job" => $job
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('dashboard.edit', [
            'active' => 'unggah',
            'title' => 'Unggah',
            'job' => Job::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $this->validate($request, [
            'job_type' => 'required|max:255',
            'title' => 'required|max:255',
            'name' => 'required|max:255',
            'registration_time' => 'required|max:255',
            'method' => 'required|max:255',
            'loc' => 'required|max:25|max:255',
            'logo' => 'image|file|max:2048|required',
            'company_type' => 'max:255',
            'education' => 'max:255',
            'major' => 'max:255',
            'criteria' => '',
            'description' => '',
            'apply' => 'required',
            'source' => 'required',
            'cp' => 'max:255',
            'legal_name' => 'max:255',
            'address' => '',
            'district' => 'max:255',
            'city' => 'max:255',
            'province' => 'max:255',
            'employees' => 'max:255',
            'flyer' => 'image|file|max:5120'
        ]);

        if($request->slug != $slug) {
            $this->validate($request, ['slug' => 'required|unique:jobs']);
        }

        $job = Job::find($slug);
        $job->title = $request->input('title');
        $job->slug = $request->input('slug');
        $job->job_type = $request->input('job_type');
        $job->name = $request->input('name');
        $job->registration_time = $request->input('registration_time');
        $job->method = $request->input('method');
        $job->loc = $request->input('loc');
        if($request->file('logo')) {
            if($request->oldLogo) {
                Storage::delete($request->oldLogo);
            }
            $job->logo = $request->file('logo')->store('job-logos');
        }
        $job->company_type = $request->input('company_type');
        $job->education = $request->input('education');
        $job->major = $request->input('major');
        $job->criteria = $request->input('criteria');
        $job->description = $request->input('description');
        $job->apply = $request->input('apply');
        $job->source = $request->input('source');
        $job->cp = $request->input('cp');
        $job->legal_name = $request->input('legal_name');
        $job->address = $request->input('address');
        $job->district = $request->input('district');
        $job->city = $request->input('city');
        $job->province = $request->input('province');
        $job->employees = $request->input('employees');
        if($request->file('flyer')) {
            if($request->oldFlyer) {
                Storage::delete($request->oldFlyer);
            }
            $job->flyer = $request->file('flyer')->store('job-flyer');
        }
        $job->save();

        return redirect('/dashboard')->with('success', 'Info lowongan sukses diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $job = Job::where('slug',$slug)->firstOrFail();
        if($job->logo) {
            Storage::delete($job->logo);
        }
        if($job->flyer) {
            Storage::delete($job->flyer);
        }
        $job->delete();
        return redirect('/dashboard')->with('success', 'Info lowongan telah dihapus!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Job::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
