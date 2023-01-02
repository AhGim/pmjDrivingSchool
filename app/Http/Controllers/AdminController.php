<?php

namespace App\Http\Controllers;

use App\Notifications\SendEmailNotification;
use Illuminate\Http\Request;

use App\Models\Tutor;

use Illuminate\Support\Facades\Auth;

use App\Models\Appointment;
//use Illuminate\Notifications\Notification;

use Notification;

class AdminController extends Controller
{
    public function addview()
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype==1)
            {
                return view('admin.add_tutor');
            }

            else{
                return redirect()->back();
            }
        }

        else{
            return redirect('login');
        }


    }

    public function upload(Request $request)
    {
        $tutor = new tutor;

        $image = $request->file;

        $imagename = time() . '.' . $image->getClientOriginalExtension();

        $request->file->move('tutorimage', $imagename);

        $tutor->image = $imagename;

        $tutor->name = $request->name;

        $tutor->phone = $request->number;

        $tutor->lessons = $request->lessons;

        $tutor->save();

        return redirect()->back()->with('message', 'Tutor Added Successfully');

    }

    public function showappointment()
    {
        if (Auth::id()) {
            if (Auth::user()->usertype == 1) {

                $data = appointment::all();

                return view('admin.showappointment', compact('data'));
            } else {
                return redirect()->back();
            }
        } else {
            return redirect('login');
        }
    }

    public function approved($id)
    {
        $data = appointment::find($id);

        $data->status = 'Approved';

        $data->save();

        return redirect()->back();
    }

    public function canceled($id)
    {
        $data = appointment::find($id);

        $data->status = 'Canceled';

        $data->save();

        return redirect()->back();
    }

    public function showtutor()
    {
        $data = tutor::all();

        return view('admin.showtutor',compact('data'));
    }

    public function deletetutor($id)
    {
        $data = tutor::find($id);

        $data->delete();

        return redirect()->back();
    }

    public function updatetutor($id)
    {
        $data = tutor::find($id);

        return view('admin.update_tutor',compact('data'));
    }

    public function edittutor(Request $request, $id)
    {
        $tutor = tutor::find($id);

        $tutor->name = $request->name;

        $tutor->phone = $request->phone;

        $tutor->lessons = $request->lessons;

        $image = $request->file;

        if ($image) {

            $imagename = time() . '.' . $image->getClientOriginalExtension();

            $request->file->move('tutorimage', $imagename);

            $tutor->image = $imagename;
        }

        $tutor->save();

        return redirect()->back()->with('message', 'Tutor Details Updated Successfully');

    }

    public function emailview($id)
    {
        $data = appointment::find($id);
        return view('admin.email_view',compact('data'));
    }

    public function sendemail(Request $request,$id)
    {

        $data = appointment::find($id);

        $details = [
            'greeting' => $request->greeting,

            'body' => $request->body,

            'actiontext' => $request->actiontext,

            'actionurl' => $request->actionurl,

            'endpart' => $request->endpart
        ];

        Notification::send($data, new SendEmailNotification($details));

        return redirect()->back()->with('message','Email is sent');
    }

    public function viewtutor_calendar()
    {
        $data = tutor::all();

        return view('admin.viewtutor_calendar',compact('data'));
    }

    public function google_calendar_add_event_with_php()
    {
        $data = tutor::all();

        return view('admin.index',compact('data'));
    }

    public function add_event()
    {
        $data = tutor::all();

        return view('admin.addEvent',compact('data'));
    }

    public function searchAppointmentData(Request $request)
    {
        $searchText = $request->search;

        $data = appointment::where('name', 'LIKE', "%$searchText%")
            ->orWhere('phone', 'LIKE', "%$searchText%")
            ->orWhere('tutor', 'LIKE', "%$searchText%")
            ->orWhere('status', 'LIKE', "%$searchText%")->get();

        return view('admin.showappointment', compact('data'));
    }

    public function searchTutorData(Request $request)
    {
        $searchText = $request->search;

        $data = tutor::where('name', 'LIKE', "%$searchText%")
            ->orWhere('phone', 'LIKE', "%$searchText%")
            ->orWhere('lessons', 'LIKE', "%$searchText%")->get();

        return view('admin.showtutor', compact('data'));
    }
}
