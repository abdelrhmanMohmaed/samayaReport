<?php

namespace App\Http\Controllers\Lines;

use App\Http\Controllers\Controller;
use App\Models\Allparts;
use App\Models\Line;
use App\Models\Part;
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Response;

class lineController extends Controller
{
    public function index()
    {
        $data['lines'] = Line::get();
        $data['parts'] = Part::get();
        $data['allparts'] = Allparts::get();
        return view('lines.index')->with($data);
    }
    public function sendReport(Request $request)
    {
        $request->validate([
            'line_id' => 'required|exists:lines,id',
            'shift' => 'required|in:A,B,C',
            'part_number' => 'required|string|max:255',
            'type' => 'required|in:Scrap,V.R',
            'scrapQty' => 'required|integer|min:1|max:999',
        ]);

        Part::create([
            'line_id' => $request->line_id,
            'shift' => $request->shift,
            'part_number' => $request->part_number,
            'type' => $request->type,
            'scrapQty' => $request->scrapQty,
        ]);
        $data = ['success' => "Your message sent successfully"];
        return Response::json($data);
    }
}
