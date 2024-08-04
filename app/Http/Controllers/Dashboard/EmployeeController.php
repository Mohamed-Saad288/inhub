<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::with('blogs')
            ->where('is_manger','=',0)
            ->filter(\request()->all())->paginate(8);

        return view('dashboard.employees.index',[
            'employees' => $employees
        ]);
    }
    public function create()
    {
        $roles = Role::all();
        return view('dashboard.employees.create',[
            'roles' => $roles,
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:employees,email', // Corrected unique validation for email
            'phone_number' => 'required|string|max:20', // Added string and max length validation
            'password' => 'required|string|min:6|max:255',
            'role_id' => 'required|exists:roles,id'
        ]);

        $employeeAttributes = $request->except('password', 'role_id');
        $employeeAttributes['password'] = Hash::make($request->post('password'));
        $role_id = $request->post('role_id');

        DB::beginTransaction();
        try {
            $employee = Employee::create($employeeAttributes);
            DB::insert("INSERT INTO employee_role (employee_id, role_id) VALUES (?, ?)", [$employee->id, $role_id]);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            throw $e;
        }

        return redirect()->route('dashboard.employees.index');
    }
    public function show(Employee $employee)
    {
        return view('dashboard.employees.show',[
            'employee' => $employee
        ]);
    }

    public function edit($id)
    {
        $employee = Employee::findOrFail($id);
        $roles = Role::all();

        return view('dashboard.employees.edit', [
            'employee' => $employee,
            'roles' => $roles,
        ]);
    }

    public function update(Request $request, $id)
    {
        $employee = Employee::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:employees,email,' . $id,
            'phone_number' => 'required|string|max:20',
            'password' => 'nullable|string|min:6|max:255',
            'role_id' => 'required|exists:roles,id'
        ]);

        $employeeAttributes = $request->except('password', 'role_id');
        if ($request->filled('password')) {
            $employeeAttributes['password'] = Hash::make($request->post('password'));
        }
        $role_id = $request->post('role_id');

        DB::beginTransaction();
        try {
            $employee->update($employeeAttributes);
            DB::update("UPDATE employee_role SET role_id = ? WHERE employee_id = ?", [$role_id, $employee->id]);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            throw $e;
        }

        return redirect()->route('dashboard.employees.index');
    }

    public function destroy($id)
    {
        $employee = Employee::findOrFail($id);


            $employee->delete();

        return redirect()->route('dashboard.employees.index');
    }


}
