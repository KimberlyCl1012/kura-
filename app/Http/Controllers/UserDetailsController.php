<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Sex;
use App\Models\Site;
use App\Models\User;
use App\Models\UserDetails;
use Illuminate\Http\Request;
use Inertia\Inertia;

class UserDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return Inertia::render('Users/Partials/CreateUserForm', ['users' => $users]);

        //  //Companies
        //  $companies = Company::all();
        //  //Sites
        //  $sites = Site::all();
        //  //Sexes
        //  $sexes = Sex::all();
 
 
        //  return Inertia::render('Users/Partials/CreateUserForm', [
        //      'companies' => $companies,
        //      'sites' => $sites,
        //      'sexes' => $sexes,
        //  ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Companies
        $companies = Company::all();
        //Sites
        $sites = Site::all();
        //Sexes
        $sexes = Sex::all();

        dd($companies,$sites,$sexes);

        return Inertia::render('Users/Create', [
            'companies' => $companies,
            'sites' => $sites,
            'sexes' => $sexes,
        ]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(UserDetails $userDetails)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UserDetails $userDetails)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, UserDetails $userDetails)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserDetails $userDetails)
    {
        //
    }
}
