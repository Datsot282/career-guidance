<?php

namespace App\Http\Controllers;

use App\allinstitudes;
use App\Course;
use App\Courses;
use App\Fuculties;
use Illuminate\Http\Request;

class RecordController extends Controller
{
    public function destroyCourse($id)
    {
        $record = Course::find($id);
        if ($record) {
            $record->delete();
            return redirect()->back()->with('success', 'Record deleted successfully.');
        }
        return redirect()->back()->with('error', 'Record not found.');
    }
    public function destroyFuculty($id)
    {
        $record = Fuculties::find($id);

        if ($record) {
            Courses::where('fuculty_id', $id)->delete();
            $record->delete();
            return redirect()->back()->with('success', 'Faculty and associated courses deleted successfully.');
        }
        return redirect()->back()->with('error', 'Faculty not found.');
    }
    public function destroyShool($id)
    {
        $record = allinstitudes::find($id);
        if ($record) {
            $record->delete();
            return redirect()->back()->with('success', 'Record deleted successfully.');
        }
        return redirect()->back()->with('error', 'Record not found.');
    }
}
