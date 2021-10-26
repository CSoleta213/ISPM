<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use Illuminate\Support\Facades\DB;

class EmployeesController extends Controller
{
    public function registerAnEmployee(Request $req) {
        
        $employee = new Employee;
        $employee->lastname=$req->lastname;
        $employee->firstname=$req->firstname;
        $employee->middlename=$req->middlename;
        $employee->ee_no=$req->ee_no;
        $employee->position=$req->position;
        $employee->dept=$req->dept;
        $employee->sect=$req->sect;
        $employee->email=$req->email;
        $employee->password=$req->password;
        $employee->save();

        return redirect('/register-an-employee')->with('confirmation', 'An employee was registered successfully!');
    }
}
