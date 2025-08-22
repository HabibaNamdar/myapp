<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Category;
use App\Models\City;
use App\Models\Country;
use App\Models\State;
use App\Models\Qualification;
use App\Models\Skill;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\User;


class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::all();
        return view('jobs.index', compact('jobs'));
    }

    public function create()
    {
        $categories = Category::all();
        $cities = City::all();
        $countries = Country::all();
        $states = State::all();
        $qualifications = Qualification::all();
        $skills = Skill::all();
        $roles = Role::all();
        $users = User::all(); // required because user_id is NOT NULL

        // job type options (enum: 1=Full-time, 2=Part-time, etc.)
        $types = [
            '1' => 'Full-time',
            '2' => 'Part-time',
            '3' => 'Contract',
            '4' => 'Internship',
            '5' => 'Temporary',
        ];

        // gender options (enum: 1=Male, 2=Female, 3=Other/Any)
        $genders = [
            '1' => 'Male',
            '2' => 'Female',
            '3' => 'Any',
        ];

        return view('jobs.create', compact(
            'categories',
            'cities',
            'countries',
            'states',
            'qualifications',
            'skills',
            'roles',
            'users',
            'types',
            'genders'
        ));
    }

    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'title'         => 'required|string|max:255',
    //         'description'   => 'nullable|string',
    //         'category_id'   => 'required|integer',
    //         'city_id'       => 'required|integer',
    //         'country_id'    => 'required|integer',
    //         'state_id'      => 'nullable|integer',
    //         'qualification' => 'nullable|string|max:255',
    //         'skills'        => 'nullable|string|max:255',
    //         'role'          => 'nullable|string|max:255',
    //         'status'        => 'required|boolean',
    //     ]);

    //     $data = $request->all();
    //     $data['slug'] = Str::slug($request->title); // ✅ generate slug

    //     Job::create($data);

    //     return redirect()->route('jobs.index')->with('success', 'Job created successfully.');
    // }
    public function store(Request $request)
    {

        // dd($request->all());
        $request->validate([
            'title' => 'required|string|max:255',
            'company_name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'city_id' => 'required|exists:cities,id',
            'country_id' => 'required|exists:countries,id',
            'state_id' => 'nullable|exists:states,id',
            'description' => 'required|string',
            'qualification' => 'nullable|string|max:255',
            'skills' => 'nullable|string|max:255',
            'role' => 'nullable|string|max:255',
            'type' => 'required|in:1,2,3,4,5',
            'gender' => 'required|in:1,2,3',
        ]);

        $slug = \Str::slug($request->title);

        $data = [
            'title' => $request->title,
            'slug' => $slug,
            'company_name' => $request->company_name ?? ' (Posted by: ' . auth()->user()->name . ')',
            'category_id' => $request->category_id,
            'user_id' => auth()->user()->id ?? 0,
            'type' => $request->type,
            'city_id' => $request->city_id,
            'country_id' => $request->country_id,
            'state_id' => $request->state_id,
            // 'qualification' => $request->qualification,
            // 'skills' => $request->skills,
            // 'role' => $request->role,
            'description' => $request->description,
            'status' => $request->status ?? 1,
            'gender' => $request->gender,
            'deadline' => $request->deadline,
            'hiring' => $request->hiring ?? json_encode(['1']),
            'monthly_salary_min' => $request->monthly_salary_min ?? 0,
            'monthly_salary_max' => $request->monthly_salary_max ?? 0,
            'year_passing_from' => $request->year_passing_from,
            'year_passing_to' => $request->year_passing_to,
            'experience_from' => $request->experience_from,
            'experience_to' => $request->experience_to,
        ];
        // dd($data);

        $job = Job::create($data);

        return redirect()->route('jobs.index')->with('success', 'Job created successfully.');
    }

    public function edit(Job $job)
    {
        return view('jobs.edit', compact('job'));
    }

    public function update(Request $request, Job $job)
    {
        $request->validate([
            'title'         => 'required|string|max:255',
            'description'   => 'nullable|string',
            'category_id'   => 'required|integer',
            'city_id'       => 'required|integer',
            'country_id'    => 'required|integer',
            'state_id'      => 'nullable|integer',
            'qualification' => 'nullable|string|max:255',
            'skills'        => 'nullable|string|max:255',
            'role'          => 'nullable|string|max:255',
            'status'        => 'required|boolean',
        ]);

        $data = $request->all();
        $data['slug'] = Str::slug($request->title); // ✅ regenerate slug

        $job->update($data);

        return redirect()->route('jobs.index')->with('success', 'Job updated successfully.');
    }

    public function destroy(Job $job)
    {
        $job->delete();
        return redirect()->route('jobs.index')->with('success', 'Job deleted successfully.');
    }
}
