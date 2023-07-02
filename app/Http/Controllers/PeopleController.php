<?php

namespace App\Http\Controllers;

use App\Http\Requests\PeopleStoreUpdateResource;
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
        $people = People::all();

        return View('people.index', compact('people'));
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
    public function store(PeopleStoreUpdateResource $request)
    {
        $data = $request->validated();

        $address = Address::create([
            'state' => $data['state'],
            'county' => $data['county'],
            'cep' => $data['cep'],
            'street' => $data['street'],
            'number' => $data['number'],
            'district' => $data['district'],
            'complement' => $data['complement'],
        ]);

        $people = People::create([
            'marital_status_id' => $data['marital_status_id'],
            'address_id' => $address['id'],
            'name' => $data['name'],
            'gender' => $data['gender'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'date_birth' => $data['date_birth'],
        ]);

        return redirect()->route('client.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $people = People::findOrFail($id);
        $maritalStatus = MaritalStatus::all();

        return view('people.show', compact('people', 'maritalStatus'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $people = People::findOrFail($id);
        $maritalStatus = MaritalStatus::all();

        return view('people.edit', compact('people', 'maritalStatus'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, People $client)
    {

        $personValidatedData = $request->validate([
            'marital_status_id' => 'required',
            'name' => 'required',
            'gender' => 'nullable',
            'email' => 'required|email',
            'phone' => 'nullable',
        ]);

        $addressValidatedData = $request->validate([
            'state' => 'required',
            'county' => 'required',
            'cep' => 'required',
            'street' => 'required',
            'number' => 'required',
            'district' => 'nullable',
            'complement' => 'nullable',
        ]);

        $client->update($personValidatedData);
        $client->address()->update($addressValidatedData);

        return redirect()->route('client.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(People $people)
    {
        //
    }
}
