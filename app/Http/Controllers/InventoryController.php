<?php

namespace App\Http\Controllers;
use App\Models\Inventory;
use Barryvdh\Snappy\Facades\SnappyPdf as PDF;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class InventoryController extends Controller
{
     
    public function index()
    {
        $query = request()->get('query', false);
        $ascending =request()->get('ascending',1);
        $limit = request()->get('limit', false);
        $page = request()->get('page', false);
        $data = Inventory::with('medicine')->get();
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

    public function getPdf()
    {
        $inventories = DB::select('select b.nombre as medicamento, a.cantidad as cantidad from inventarios a, medicamento b where b.id = a.medicamento_id');    
        $pdf = PDF::loadView('system.inventory.inventory-pdf',  ['inventories' => $inventories]);
        return $pdf->download('inventario.pdf');
    }


    public function show($id)
    {
        
    }

   
    public function store()
    {
       
    }

    
    public function update()
    {
      
    }



    public function destroy($id)
    {
       
    
    }

    public function getMinStock()
    {
        return DB::select('select b.nombre as medicamento, a.cantidad as cantidad from inventarios a, medicamento b where b.id = a.medicamento_id and cantidad = ( select MIN(cantidad) from inventarios a)');    
    }
    
     
    

    






}
