<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patients;
use App\Http\Requests\PatientRequest;
use Barryvdh\Snappy\Facades\SnappyPdf as PDF;
use Illuminate\Support\Facades\DB;

class PatientsController extends Controller
{
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
        $data = Patients::all();
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
     * @return dcotor
     */
    public function show($id)
    {
        return Patients::findOrfail($id);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param PatientRequest $request
     * @return 
     */
    public function store(PatientRequest $request)
    {
        $patient = new Patients();
        $patient->fill($request->all());
        $patient->save();

        return $patient;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param PatientRequest $request
     * @param int $id
     * @return array
     */
    public function update(PatientRequest $request, $id)
    {
        $patient = Patients::findOrfail($id);
        $patient->fill($request->all());
        $patient->save();
    
       
 
        return $patient;
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return user
     */
    public function destroy($id)
    {
        $patient = Patients::findOrfail($id);
        $patient->delete();
        $patient->delete();

        return $patient;
      
    }

    public function getAllPatients()
    {
        return Patients::all();
    }

    public function patientChart()
    {
        $patients = DB::select('select MONTH(created_at) as month, COUNT(id) as total from pacientes group by MONTH(created_at)');

        $array = array();

        $array = array_pad($array,12,0);
       
        foreach($patients as $patient)
        {
            $array[$patient->month] = $patient->total;
        }
        return $array;
    }

    public function getPdf()
    {
        $patients = DB::select('select * from pacientes');   
        $pdf = PDF::loadView('system.patients.patients-pdf',  ['patients' => $patients]);  
        return $pdf->download('pacientes.pdf');
    }

}
