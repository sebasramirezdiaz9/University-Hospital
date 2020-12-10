<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
class MedicineSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert('insert into medicamento (id, nombre, tipo_medicamento, presentacion, activo, precio_compra, precio_venta, created_at, updated_at) 
        values (?, ?, ?, ?, ?, ?, ?, ?, ?)', [1, 'Paracetamol Normon', 'Generico', 'Tableta 400 mg','Paracetamol', 120 ,100,Carbon::now()->format('Y-m-d H:i:s'),Carbon::now()->format('Y-m-d H:i:s')  ]);

        DB::insert('insert into medicamento (id, nombre, tipo_medicamento, presentacion, activo, precio_compra, precio_venta, created_at, updated_at) 
        values (?, ?, ?, ?, ?, ?, ?, ?, ?)', [2, 'Naproxeno Sodico', 'Generico', 'Tableta 100 mg','Naproxeno', 170 ,120,Carbon::now()->format('Y-m-d H:i:s'),Carbon::now()->format('Y-m-d H:i:s')  ]);

        DB::insert('insert into medicamento (id, nombre, tipo_medicamento, presentacion, activo, precio_compra, precio_venta, created_at, updated_at) 
        values (?, ?, ?, ?, ?, ?, ?, ?, ?)', [3, 'Bromuro de N-butilhioscina', 'Generico', 'Tableta 20 mg','Butilhioscinao', 220 ,150,Carbon::now()->format('Y-m-d H:i:s'),Carbon::now()->format('Y-m-d H:i:s')  ]);

        DB::insert('insert into medicamento (id, nombre, tipo_medicamento, presentacion, activo, precio_compra, precio_venta, created_at, updated_at) 
        values (?, ?, ?, ?, ?, ?, ?, ?, ?)', [4, 'Metmorfina', 'Generico', 'Tableta 20 mg','Clorhidrato de Metmorfina', 45 ,60,Carbon::now()->format('Y-m-d H:i:s'),Carbon::now()->format('Y-m-d H:i:s')  ]);

        DB::insert('insert into medicamento (id, nombre, tipo_medicamento, presentacion, activo, precio_compra, precio_venta, created_at, updated_at) 
        values (?, ?, ?, ?, ?, ?, ?, ?, ?)', [5, 'Etofenamato', 'Generico', 'Ampolleta de 2 ml','Solución inyectable', 80 ,100,Carbon::now()->format('Y-m-d H:i:s'),Carbon::now()->format('Y-m-d H:i:s')  ]);

        DB::insert('insert into medicamento (id, nombre, tipo_medicamento, presentacion, activo, precio_compra, precio_venta, created_at, updated_at) 
        values (?, ?, ?, ?, ?, ?, ?, ?, ?)', [6, 'Metamizol sódico ', 'Generico', '10 comprimidos 500 mg','Comprimido', 20 ,40,Carbon::now()->format('Y-m-d H:i:s'),Carbon::now()->format('Y-m-d H:i:s')  ]);

        DB::insert('insert into medicamento (id, nombre, tipo_medicamento, presentacion, activo, precio_compra, precio_venta, created_at, updated_at) 
        values (?, ?, ?, ?, ?, ?, ?, ?, ?)', [7, 'KETOROLACO ', 'Generico', 'Envase con 3 frascos ámpula o 3
        ampolletas de 1 ml.
        ','Ampolletas', 220 ,150,Carbon::now()->format('Y-m-d H:i:s'),Carbon::now()->format('Y-m-d H:i:s')  ]);

        DB::insert('insert into medicamento (id, nombre, tipo_medicamento, presentacion, activo, precio_compra, precio_venta, created_at, updated_at) 
        values (?, ?, ?, ?, ?, ?, ?, ?, ?)', [8, 'Losartán', 'Generico', '30 grageas o comprimidos
         50 mg ','', 220 ,150,Carbon::now()->format('Y-m-d H:i:s'),Carbon::now()->format('Y-m-d H:i:s')  ]);

        DB::insert('insert into medicamento (id, nombre, tipo_medicamento, presentacion, activo, precio_compra, precio_venta, created_at, updated_at) 
        values (?, ?, ?, ?, ?, ?, ?, ?, ?)', [9, 'Omeprazol', 'Generico', 'Tableta 20 mg','Omeprazol', 220 ,150,Carbon::now()->format('Y-m-d H:i:s'),Carbon::now()->format('Y-m-d H:i:s')  ]);

        DB::insert('insert into medicamento (id, nombre, tipo_medicamento, presentacion, activo, precio_compra, precio_venta, created_at, updated_at) 
        values (?, ?, ?, ?, ?, ?, ?, ?, ?)', [10, 'Ondansetrón', 'Generico', '2 mg/mL','Ondansetrón', 100 ,150,Carbon::now()->format('Y-m-d H:i:s'),Carbon::now()->format('Y-m-d H:i:s')  ]);
    }
}
