<?php

namespace App\Http\Controllers\parts;

use App\Http\Controllers\Controller;
use App\Models\Line;
use App\Models\Part;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PartController extends Controller
{

    public function show(Request $request)
    {
        $line_id = DB::table('parts')->select('line_id')->distinct()->get()->pluck('line_id')->sort();
        $shift = DB::table('parts')->select('shift')->distinct()->get()->pluck('shift')->sort();
        $part_number = DB::table('parts')->select('part_number')->distinct()->get()->pluck('part_number')->sort();
        $type = DB::table('parts')->select('type')->distinct()->get()->pluck('type')->sort();
        $created_at = DB::table('parts')->select('created_at')->distinct()->get()->pluck('created_at')->sort();

        $lines = Line::all();
        $parts = Part::query();

        if ($request->filled('line_id')) {
            $parts->where('line_id', $request->line_id);
        }

        if ($request->filled('shift')) {
            $parts->where('shift', $request->shift);
        }

        if ($request->filled('part_number')) {
            $parts->where('part_number', $request->part_number);
        }

        if ($request->filled('type')) {
            $parts->where('type', $request->type);
        }

        if ($request->filled('created_at')) {
            $parts->whereDate('created_at', $request->created_at);
        }

        return view('parts.show', [
            'line' => $line_id,
            'shift' => $shift,
            'part_number' => $part_number,
            'type' => $type,
            'created_at' => $created_at,
            'lines' => $lines->all(),
            'parts' => $parts->get(),
        ]);
    }

    public function delete(Part $part)
    {
        $part->delete();
        return back();
    }
        // public function update(Request $request)
        // {
        //     $request->validate([
        //         'id' => 'require|exists:parts,id',
        //         'line_id' => 'required|exists:lines,id',
        //         'shift' => 'required|in:A,B,C',
        //         'part_number' => 'required|string|max:255',
        //         'type' => 'required|in:Scrap,V.R',
        //         'scrapQty' => 'required|integer|min:1|max:999',
        //     ]);
        //     Part::findOrFail($request->id)->update([
        //         'line_id' => $request->line_id,
        //         'shift' => $request->shift,
        //         'part_number' => $request->part_number,
        //         'type' => $request->type,
        //         'scrapQty' => $request->scrapQty,
        //     ]);
        //     return back();
        // }
    public function toggle(Part $part, Request $request)
    {
        $part->update([
            'active' => 0,
        ]);
        return back();
    }
    public function toggleAdmin(Part $part, Request $request)
    {
        $part->update([
            'active' => !$part->active,
        ]);
        return back();
    }
}
