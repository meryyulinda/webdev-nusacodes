<?php

namespace App\Http\Controllers;
use App\Models\Employee;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(){
        // return "Employee";
        $data = Employee::where('jenis_kelamin', 'Perempuan')->orWhere('jenis_kelamin', 'Laki-laki')->get();
        return view('employee.index', ['data_employee' => $data]);
    }

    public function tambah(Request $request){
        $validate = $request->validate([
            'nama' => 'required|max:100'
        ]);
        $employee = new Employee;
        $employee->nama = $request->nama; # $employee->nama (this is according to our COLUMN name on the table)
        $employee->usia = $request->usia; # $request->usia (this is according to "NAME" parameter on our HTML FORM INPUT)
        $employee->kota = $request->kota;
        $employee->alamat = $request->alamat;
        $employee->jenis_kelamin = $request->jenis_kelamin;
        $employee->save();

        return redirect('/employee');
    }

    public function edit($id){
        $data = Employee::where('id', $id)->first();
        return view('employee.edit', ['data_employee' => $data]);
    }

    public function update(Request $request){
        $update = Employee::where('id', $request->id)->first();
        $update->nama = $request->nama;
        $update->usia = $request->usia;
        $update->kota = $request->kota;
        $update->alamat = $request->alamat;
        $update->jenis_kelamin = $request->jenis_kelamin;
        $update->save();

        return redirect('/employee');
    }

    public function hapus($id){
        #Cara 1
        // $data = Employee::find($id);
        // $data->delete();

        #Cara 2
        $data = Employee::where('id', $id)->first();
        $data->delete();

        return redirect('/employee');
    }
}
