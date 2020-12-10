<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Date;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\DateRequest;
use Carbon\Carbon;
use Barryvdh\Snappy\Facades\SnappyPdf as PDF;

class DateController extends Controller
{
     //
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $query = request()->get('query', false);
        $ascending =request()->get('ascending',1);
        $limit = request()->get('limit', false);
        $page = request()->get('page', false);
        $data = Date::with('doctor', 'patient')->get();
        if ($limit&&$query)
            foreach (json_decode($query, true) as $column => $value)
                if ($value !== "") {

                    $data = $data->filter(function ($news) use ($column, $value) {
                        return strpos(strtolower($news->$column), strtolower($value)) !== false;
                    });

                }

        $count = $data->count();
        $data = $data->slice(($page - 1) * $limit)->take($limit)->values();
        return compact('data', 'count');
       
    }


      /**
     * 
     * @return date
     */
    public function show($id)
    {
        return Date::findOrfail($id)->append('doctor_name', 'patient_name');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param DateRequest $request
     * @return 
     */
    public function store(DateRequest $request)
    {
        $date = new Date();
        $date->fill($request->all());
        $date->save();

        return $date;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param DateRequest $request
     * @param int $id
     * @return array
     */
    public function update(DateRequest $request, $id)
    {
        $date = Date::findOrfail($id);
        $date->fill($request->all());
        $date->save();
    
        return $date;
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return date
     */
    public function destroy($id)
    {
        $date = Date::findOrfail($id);
        $date->delete();

        return $date;
    
    }

    public function getDatesByMonth()
    {
        $dates = DB::select('SELECT MONTH(created_at) AS mes, COUNT(id) as total FROM `citas` group by MONTH(created_at)');
        $array = array();

        $array = array_pad($array,12,0);
       
        foreach($dates as $date)
        {
            $array[$date->mes -1] = $date->total;
        }
        return $array;
    }

    public function dateChart()
    {
        $dates = DB::select('select a.name as Doctor, COUNT(b.id) as citas from doctores a, citas b where a.id = b.doctor_id group by a.name');
      
        $dates_control = array();
        $doctors = array();
       
       
        foreach($dates as $date)
        {
           array_push($doctors, $date->Doctor);
           array_push($dates_control, $date->citas);
        }
        return compact('dates_control', 'doctors');
    }

    public function getPdf()
    {
        $dates = DB::select('select a.id as id, a.fecha as fecha ,b.name as doctor, c.name as paciente from citas a, doctores b, pacientes c where c.id = a.paciente_id and b.id = a.doctor_id');     
        $pdf = PDF::loadView('system.dates.dates-pdf',  ['dates' => $dates]);
        return $pdf->download('citas.pdf');
    }

}
