<?php

namespace App\Http\Controllers\chart;

use App\Http\Controllers\Controller;
use App\Models\Part;
use Carbon\Carbon;
use Illuminate\Http\Request; 

class chartController extends Controller
{
    public function index()
    {
        $parts = Part::all();
        return view(
            'chart.show-chart',
            ['parts' => $parts]
        );
    }
    public function show(Request $request)
    {
        $fromDate = $request->input('fromDate');
        $toDate =  $request->input('toDate');
        $part_number = $request->input('part_number');
        $shift = $request->input('shift');

        $parts = Part::query();
        $dataPoints  = array();
        if ($request->filled(['fromDate', 'toDate', 'part_number', 'shift'])) {
            $result =  $parts->where('part_number', $request->part_number)->get();
            $result = $parts->where('shift', $request->shift)->get();
            $result = $parts->whereDate('created_at', '>=', $fromDate)->get();
            $result = $parts->whereDate('created_at', '<=', $toDate)->get();

            foreach ($result as $part) {
                array_push($dataPoints, array(
                    'y' => $part->scrapQty,
                    'label' =>  Carbon::parse($part->created_at)->format('d M, Y/ W'),
                ));
            }
            // dd($dataPoints);
        } elseif ($request->filled(['fromDate', 'toDate', 'part_number'])) {
            $result = $parts->where('part_number', $request->part_number)->get();
            $result =  $parts->whereDate('created_at', '>=', $fromDate)->get();
            $result = $parts->whereDate('created_at', '<=', $toDate)->get();

            foreach ($result as $part) {
                array_push($dataPoints, array(
                    'y' => $part->scrapQty,
                    'label' =>  Carbon::parse($part->created_at)->format('d M, Y/ W'),
                ));
            }
            // dd($dataPoints);
        } else {
            return back();
        }

        return  view('chart.show-chart', [
            'part_number' => $part_number,
            'shift' => $shift,
            'created_at' => $fromDate,
            'created_at' => $toDate,
            'dataPoints' => $dataPoints,
            'parts' => $parts->get(),
        ]);
    }
}
