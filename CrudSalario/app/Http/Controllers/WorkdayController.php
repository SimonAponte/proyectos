<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Workday;
use Illuminate\Http\Request;

class WorkdayController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(string $id)
    {
        return view('workday/create', compact('id'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $workday = new Workday();
        
        $workday->employee_id = $request->employee_id;
        $workday->date = $request->date;
        $workday->worked_hours = $request->worked_hours;

        $workday->save();

        return redirect()->route('employees.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function report(string $id){
       $workdays = Workday::where('employee_id', $id)->sum('worked_hours');
       $employee = Employee::find($id);
       return view('workday/report', compact('workdays','employee'));
       
    }
}
