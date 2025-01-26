<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\Appointment;

class AppointmentController extends Controller
{
    public function appointment(Request $request)
    {
        $data = new appointment;

        $data->surname=$request->surname;
        $data->name=$request->name;
        $data->email=$request->email;
        $data->date_birth=$request->date_birth;
        $data->date_rdv=$request->date_rdv;
        $data->doctor=$request->doctor;
        $data->phone=$request->phone;
        $data->message=$request->message;

        $data->status='In progress';

        if(Auth::id())
        {
            $data->user_id=Auth::user()->id;
        }
        
        $data->save();

        return redirect()->back()->with('message', 'Appointment request sent!');

    }

    public function myappointment()
    {
        if(Auth::id())
        {
            $userid=Auth::user()->id;
            $appoint=appointment::where('user_id', $userid)->get();


            return view('user.my_appointment', compact('appoint'));
        }

        else
        {
            return redirect()->back();
        }

    }

    public function cancel_appoint($id)
    {
        $data=appointment::find($id);

        $data->delete();

        return redirect()->back();
    }
}
