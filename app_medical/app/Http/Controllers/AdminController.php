<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Appointment;
use App\Models\Patient;

class AdminController extends Controller
{
    public function addview()
    {
        return view('admin.add_doctor');
    }

    public function upload(Request $request)
    {
        $doctor=new doctor;

        $doctor->surname=$request->surname;
        $doctor->name=$request->name;
        $doctor->description=$request->description;
        $doctor->phone=$request->number;

        $doctor->save();

        return redirect()->back()->with('message', 'Doctor added successfully!');
    }

    public function showappointment()
    {
        $data=appointment::all();

        return view('admin.showappointment', compact('data'));
    }

    public function approved($id)
    {
        $data=appointment::find($id);

        $data->status='Approved';

        $data->save();

        return redirect()->back();
    }

    public function canceled($id)
    {
        $data=appointment::find($id);

        $data->status='Canceled';

        $data->save();

        return redirect()->back();
    }

    public function showdoctor()
    {
        $data=doctor::all();

        return view('admin.showdoctor', compact('data'));
    }

    public function deletedoctor($id)
    {
        $data=doctor::find($id);

        $data->delete();

        return redirect()->back();
    }

    public function updatedoctor()
    {
        
        return view('admin.update_doctor');
    }

    public function showpatient()
    {
        $data=patient::all();

        return view('admin.show_patient', compact('data'));
    }

    public function deletepatient($id)
    {
        $data=patient::find($id);

        $data->delete();

        return redirect()->back();
    }

    public function updatepatient($id)
    {
        $data=patient::find($id);

        return view('admin.update_patient', compact('data'));
    }

    public function add_patient_view()
    {
        return view('admin.add_patient_view');
    }

    public function upload_patient(Request $request)
    {
        $patient=new patient;
        

        $patient->surname=$request->surname;
        $patient->name=$request->name;
        $patient->email=$request->email;
        $patient->date_birth=$request->date_birth;
        $patient->doctor=$request->doctor;
        $patient->phone=$request->phone;
        

        $patient->save();

        return redirect()->back()->with('message', 'Patient added successfully!');
    }

    public function editpatient(Request $request, $id)
    {
        $patient=patient::find($id);

        $patient->surname=$request->surname;
        $patient->name=$request->name;
        $patient->email=$request->email;
        $patient->date_birth=$request->date_birth;
        $patient->doctor=$request->doctor;
        $patient->phone=$request->phone;

        $patient->save();

        return redirect()->back()->with('message', 'Patient modified successfully!');
    }
}
