<?php

namespace App\Http\Controllers;

use App\Models\Record;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RecordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $records = Record::orderBy("date","desc")->paginate(10);
        return view("records.index", ["records" => $records]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $hours = [];
        $date = Carbon::now()->startOfHour();
        $end = Carbon::now()->addMonth();
        $records = Record::whereBetween("date", [$date, $end])->get()->pluck("date")->toArray();

        while ($date <= $end){
            if($date->format("H") >= 9 && $date->format("H") <= 15) {
                if (!in_array($date->format("Y-m-d H:i:s"), $records)) {
                    $hours[] = [
                        "id" => $date->timestamp, // Event's ID (required)
                        "name" => $date->format("H:i"), // Event name (required)
                        "date" => $date->format("m/d/Y"),
                        "type" => "holiday", // Event type (required)
                        "everyYear" => false, // Same event every year (optional)
                        "description" => "գրանցվել" // Same event every year (optional)
                    ];
                }
            }

            $date->addHour();
        }

        return view("records.create", ["hours" => $hours]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Validator::make($request->all(), [
            'date' => ['required', 'date', 'max:255'],
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'comment' => ['required', 'string', 'max:500'],
        ])->validate();

        $record = Record::create($request->only([
            'first_name',
            'last_name',
            'comment',
            'date',
            'phone',
        ]));

        return  redirect()->route("records.show", $record)->with('success', true);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Record  $record
     * @return \Illuminate\Http\Response
     */
    public function show(Record $record)
    {
        return view("records.show", ["record" => $record]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Record  $record
     * @return \Illuminate\Http\Response
     */
    public function edit(Record $record)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Record  $record
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Record $record)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Record  $record
     * @return \Illuminate\Http\Response
     */
    public function destroy(Record $record)
    {
        //
    }
}
