<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\MaritalStatus;
use App\Models\People;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Validator;

class PeopleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $peoples = People::all();

        return View('people.index', compact('peoples'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $maritalStatus = MaritalStatus::all();
        return View('people.create', compact('maritalStatus'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            // People
            'marital_status_id' => 'required',
            'name' => 'required|max:250',
            'gender' => 'required',
            'email' => 'nullable|email',
            'phone' => 'nullable',
            'date_birth' => 'required|date|before_or_equal:' . now()->subYears(18)->format('Y-m-d'),

            // Address
            'state' => 'required',
            'county' => 'required',
            'cep' => 'nullable',
            'street' => 'required',
            'number' => 'required',
            'district' => 'required',
            'complement' => 'nullable|max:250',
        ]);

        $address = Address::create([
            'state' => $validatedData['state'],
            'county' => $validatedData['county'],
            'cep' => $validatedData['cep'],
            'street' => $validatedData['street'],
            'number' => $validatedData['number'],
            'district' => $validatedData['district'],
            'complement' => $validatedData['complement'],
        ]);

        $people = People::create([
            'marital_status_id' => $validatedData['marital_status_id'],
            'address_id' => $address['id'],
            'name' => $validatedData['name'],
            'gender' => $validatedData['gender'],
            'email' => $validatedData['email'],
            'phone' => $validatedData['phone'],
            'date_birth' => $validatedData['date_birth'],
        ]);

        return redirect()->route('people.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(People $people)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(People $people)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, People $people)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(People $people)
    {
        //
    }
}
