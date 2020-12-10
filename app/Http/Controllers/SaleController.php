<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class SaleController extends Controller
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
        $data = DB::select('select * from ventas');     
        $data = collect($data);

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
     * @param PrescriptionRequest $request
     * @return 
     */
    public function store(Request $request)
    {
        DB::insert('insert into ventas (fecha, subtotal, total ,folio, metodo_pago_id, created_at ,updated_at) 
        values (?, ?, ?, ?, ?, ?, ?)', [$request->fecha, $request->subtotal, $request->total, $request->folio, $request->method_id, Carbon::now()->format('Y-m-d H:i:s'),Carbon::now()->format('Y-m-d H:i:s')  ]);

        $sale = DB::table('ventas')->orderBy('created_at', 'desc')->first();
        foreach($request->medicines as $medicine)
        {
            DB::insert('insert into medicamento_venta (medicamento_id, venta_id, cantidad, created_at, updated_at) 
            values (?, ?, ?, ?, ?)', [ $medicine['medicine_id'], $sale->id, $medicine['cantidad'], Carbon::now()->format('Y-m-d H:i:s'),Carbon::now()->format('Y-m-d H:i:s')  ]);
            

            $cantidad =  DB::table('inventarios')->where('medicamento_id',$medicine['medicine_id'])->first()->cantidad - $medicine['cantidad'];
            //DB::select('exec sp_update_inventory('.$medicine['medicine_id'].','.$cantidad);
        }

      

        return 1;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return user
     */
    public function destroy($id)
    {
        $deleted = DB::delete('delete from recetas_medicas where id = ?', [$id]);
      
    }

    public function downloadPdf($id)
    {
        $prescription = DB::select('select b.name as doctor, c.name as paciente, d.nombre as estado from recetas_medicas a, doctores b, pacientes c, estado_receta d where d.id = a.estado_receta_id and c.id = a.paciente_id and b.id = a.doctor_id and a.id = ?', [$id]);     
        $medicines = DB::select('select b.nombre as medicamento, c.instrucciones as instrucciones from recetas_medicas a, medicamento b, medicamento_receta_medica c where a.id = c.receta_medica_id and b.id = c.medicamento_id and a.id = ?', [$id]);    
        $pdf = PDF::loadView('system.prescriptions.prescription-pdf',  ['prescription' => $prescription, 'medicines' => $medicines]);
        return $pdf->download('receta_medica.pdf');
       
    }

    public function getMethods()
    {
        return DB::select('select id, nombre from metodos_pago'); 
    }
}
