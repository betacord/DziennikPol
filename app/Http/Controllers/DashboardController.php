<?php

namespace App\Http\Controllers;

use Request;
use App\Http\Requests\CreateMessagesRequest;
use App\Mark;
use App\Absence;
use Auth;
use App\Extensions\StringHelper;
use App\Message;
use App\Event;
use App\Teacher;
use App\Actualnnosci;
use App\Luckynumber;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $menuClasses = ['active', '', '', '', ''];
        $marksCount = Mark::where('user_id','=', Auth::user()->id)->count();
        $absencesCount = Absence::where('user_id','=', Auth::user()->id)->count();
        $messagesCount = Message::where('to_id','=', Auth::user()->id)->count();
        $eventsCount = Event::count();


        $notreadedMessages =  0;
        $notreadedAbsences  = 0;
        $notreadedEvents = round(Event:: count() / $eventsCount * 100);
        $notreadedMarks = 0;

        if(!$messagesCount == 0)
        {
            $notreadedMessages = round(Message::where('read', '=', '0')->where('to_id','=', Auth::user()->id)->count() / $messagesCount * 100);

        }
        if(!$absencesCount == 0)
        {
            $notreadedAbsences = round(Absence::where('read', '=', '0')->where('user_id','=', Auth::user()->id)->count() / $absencesCount * 100);

        }
        if(!$marksCount == 0)
        {

            $notreadedMarks = round(Mark::where('read', '=', '0')->where('user_id','=', Auth::user()->id)->count() / $marksCount * 100);
        }

        $notreadedEvents = round(Event:: count() / $eventsCount * 100);
        //aktualnosci
        $actualnnoscis = Actualnnosci::latest()->get();
        //numerek
        $luckynumbers = Luckynumber::latest()->limit(1)->get();


        return view('panel.index', compact('menuClasses', 'marksCount','absencesCount','messagesCount','eventsCount','notreadedMessages','notreadedAbsences','notreadedEvents','notreadedMarks','actualnnoscis','luckynumbers'));
    }
    public function oceny()
    {
        $menuClasses = ['', 'active', '', '', ''];
        $marks = Mark::where('user_id', '=', Auth::user()->id)
            ->join('subjects', 'subjects.id', '=', 'marks.subject_id')
            ->orderBy('name', 'ASC')->get();
        $listMarks = StringHelper::getListMarks($marks);
        Mark::where('user_id', Auth::user()->id)->update(['read' => true]);
        return view('panel.oceny', compact('menuClasses', 'listMarks'));
        //return $listMarks;
    }

    public function nieobecnosci()
    {
        $menuClasses = ['', '', 'active', '', ''];
        $absences = Absence::where('user_id', '=', Auth::user()->id)
            ->join('lessons', 'lessons.id', '=', 'absences.lesson_id')
            ->orderBy('lesson_date', 'ASC')->get();
        $listAbsences = StringHelper::getListAbsences($absences);
        Absence::where('user_id', Auth::user()->id)->update(['read' => true]);
        return view('panel.nieobecnosci', compact('menuClasses','listAbsences'));
    }


    public function wiadomosci()
    {
        $menuClasses = ['', '', '', 'active', ''];
      // $messages = Message::where('to_id','=', Auth::user()->id)
         //  ->join('teachers', 'messages.from_id', '=','teachers.id')
           //->orderBy('messages.created_at', 'DESC')->get();
        $messages = Message::where('to_id', '=', Auth::user()->id)->latest()->get();

        return view('panel.wiadomosci', compact('menuClasses'))->with('messages', $messages);
    }

    public function wydarzenia()
    {
        $menuClasses = ['', '', '', '', 'active'];
        $events = Event::latest()->get();
        //Event::where('user_id', Auth::user()->id)->update(['read' => true]);
        return view('panel.wydarzenia', compact('menuClasses'))->with('events', $events);
    }


    public function create()
    {
        $menuClasses = ['', '', '', 'active', ''];
        $teachers = Teacher::orderBy('id', 'ASC')->get(['id', 'name']);
        $list = array();
        foreach ($teachers as $teacher) {
            $list[$teacher->id] = $teacher->name;
        }

        return view('panel.create', compact('menuClasses', 'list'));
    }

    public function show($id)
    {
        $menuClasses = ['', '', '', 'active', ''];
        $message = Message::findOrFail($id);
        Message::where('id','=' , $id)->update(['read' => true]);
        return view('panel.show', compact('message', 'menuClasses'));
    }

    public function store(CreateMessagesRequest $request)
    {
        Message::create($request->all());
        return redirect('/dashboard/wiadomosci.shtml');
    }
//    public function store()
//    {
//        $input = Request::all();
//        return $input;
//    }




///@foreach($actualnnoscis as $actualnnosci)
//{{$actualnnosci->actualnnoscis_topic}}
//{{$actualnnosci->created_at}}
//{{$actualnnosci->actualnnoscis_description}}
}
