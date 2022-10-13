<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Auth\CrudEvents;

class CalenderController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = CrudEvents::whereDate('event_start', '>=', $request->start)
                ->whereDate('event_end',   '<=', $request->end)
                ->get(['id', 'event_name', 'description', 'event_start', 'event_end']);
            return response()->json($data);
        }
        return view('Backend.notice');
    }

    public function calendarEvents(Request $request)
    {

        switch ($request->type) {
            case 'create':
                $event = CrudEvents::create([
                    'event_name' => $request->event_name,
                    'description' => $request->description,
                    'event_start' => $request->event_start,
                    'event_end' => $request->event_end,
                ]);

                return response()->json($event);
                break;

            case 'edit':
                $event = CrudEvents::find($request->id)->update([
                    'event_name' => $request->event_name,
                    'description' => $request->description,
                    'event_start' => $request->event_start,
                    'event_end' => $request->event_end,
                ]);

                return response()->json($event);
                break;

            case 'delete':
                $event = CrudEvents::find($request->id)->delete();

                return response()->json($event);
                break;

            default:
                # ...
                break;
        }
    }
    public function Notice_Crud()
    {
        // $story = Story::all();
        $notice = CrudEvents::paginate(5);
        return view('Backend.Notice_Crud')->with('notice', $notice);
    }

    public function DeleteNotice(Request $request)
    {
        $notice = CrudEvents::where('id', $request->id)->first();
        $notice->delete();
        return redirect()->back()->with('msg', 'Event Deleted Sucessfuly');
    }

    public function EditNotice(Request $request)
    {
        $notice = CrudEvents::where('id', $request->id)->first();
        return view('Backend.Notice_Update')->with('notice', $notice);
    }

    public function EditNoticeSubmitted(Request $request)
    { {
            $validate = $request->validate([
                "title" => "required",
                'start' => 'required',
                'end' => 'required',
                'created' => 'required',
                'description' => 'required'

            ]);

            $admin = CrudEvents::where('id', $request->id)->first();

            $admin->event_name = $request->title;
            $admin->event_start = $request->start;
            $admin->event_end = $request->end;
            $admin->created_at = $request->created;
            $admin->description = $request->description;
            if ($admin) {
                $admin->save();
                return redirect()->back()->with("msg", "Successfuly Notice Updated");
            }
        }
    }


    // User-calander-view
    // function userCalender(Request $request)
    // {
    //     return view('Frontend.userCalander');
    // }
}
