<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreEmployeeRequest;
use App\Http\Requests\UpdateEmployeeRequest;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees=Employee::paginate(10);
        return view('admin.pages.allEmployees')->with(['employees'=>$employees]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.addEmployee');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEmployeeRequest $request)
    {
        Employee::create([
            'name' => $request->name,
            'status' => $request->status,
            'role' => $request->role,
            'salary' => $request->salary,
            'phone' => $request->phone,
            'address' => $request->address,
            'birthdate' => $request->birthdate,
            'gender' => $request->gender,
            'nationalID' => $request->nationalID,
            'image' => $request->image,
            

        ]);
        return redirect()->back()->with('success','employee added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEmployeeRequest $request, Employee $employee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee,string $id)
    {
        $employee=Employee::find($id);
        if ($employee->image) {
        Storage::disk('public')->delete($employee->image);
    }
    Employee::destroy($employee->id);
        return back()->with('deleted', 'employee deleted successfully');
    
    }
}
