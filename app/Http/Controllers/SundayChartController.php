<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\sundaybethelattendance;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;
use Illuminate\Http\Response;

class SundayChartController extends Controller
{
    //
    public function index()
    {
        return view('bethelattendance.sundaychart');
    }
    public function show()
    {
        //Retrieving the attendance from the database 
        $attendanceData = sundaybethelattendance::all();

        //Processing the date 
        $attendanceData->each(function ($item) {
            $item->date = Carbon::parse($item->date)->format('l j, F Y');
        });

        return response()->json($attendanceData);
    }
}
