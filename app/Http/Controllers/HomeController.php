<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\Tutor;

use App\Models\Appointment;

class HomeController extends Controller
{
    public function redirect()
    {

        if(Auth::id())
        {
            if(Auth::user()->usertype=='0')
            {
                $tutor = tutor::all();
                return view('user.home', compact('tutor'));
            }

            else
            {
                return view('admin.home');
            }
        }

        else
        {
            return redirect()->back(); 
        }
    }

    public function index()
    {
        if (Auth::id()) 
        {
            return redirect('home');
        } else 
        {

            $tutor = tutor::all();

            return view('user.home', compact('tutor'));
        }
    }
    
    public function appointment(Request $request)
    {
        $data = new appointment;

        $data->name = $request->name;

        $data->email = $request->email;

        $data->date = $request->date;

        $data->time_from = $request->time_from;

        $data->time_to = $request->time_to;

        $data->phone = $request->phone;

        $data->message = $request->message;

        $data->tutor = $request->tutor;

        $data->status ='In progress';

        if(Auth::id())
        {

        $data->user_id =Auth::user()->id;

        }

        $data->save();

        return redirect()->back()->with('message', 'Appointment Request Successful . You will be contacted soon');

    }

    public function myappointment()
    {
        if (Auth::id()) {

            if (Auth::user()->usertype == 0) {

                $userid = Auth::user()->id;

                $appoint = appointment::where('user_id', $userid)->get();

                return view('user.my_appointment', compact('appoint'));
            }
        }
        else{
            return redirect()->back();
        }
    }

    public function cancel_appoint($id)
    {
        $data = appointment::find($id);

        $data->delete();

        return redirect()->back();

    }
}
