<?php

namespace Database\Seeders;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;


use Illuminate\Database\Seeder;

class MyInventorySeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::insert('insert into inventarios (id,medicamento_id, cantidad,  created_at, updated_at) 
        values (?, ?, ?, ?, ?)', [1, 1, "5" ,  Carbon::create(1998, 12, 9,), Carbon::now()->format('Y-m-d H:i:s'),Carbon::now()->format('Y-m-d H:i:s')  ]);

        DB::insert('insert into inventarios (id,medicamento_id, cantidad,  created_at, updated_at) 
        values (?, ?, ?, ?, ?)', [2, 2, "6" ,  Carbon::create(1998, 12, 9,), Carbon::now()->format('Y-m-d H:i:s'),Carbon::now()->format('Y-m-d H:i:s')  ]);

        DB::insert('insert into inventarios (id,medicamento_id, cantidad,  created_at, updated_at) 
        values (?, ?, ?, ?, ?)', [3, 3, "8" ,  Carbon::create(1998, 12, 9,), Carbon::now()->format('Y-m-d H:i:s'),Carbon::now()->format('Y-m-d H:i:s')  ]);

        DB::insert('insert into inventarios (id,medicamento_id, cantidad,  created_at, updated_at) 
        values (?, ?, ?, ?, ?)', [4, 4, "20" ,  Carbon::create(1998, 12, 9,), Carbon::now()->format('Y-m-d H:i:s'),Carbon::now()->format('Y-m-d H:i:s')  ]);

        DB::insert('insert into inventarios (id,medicamento_id, cantidad,  created_at, updated_at) 
        values (?, ?, ?, ?, ?)', [5, 5, "30" ,  Carbon::create(1998, 12, 9,), Carbon::now()->format('Y-m-d H:i:s'),Carbon::now()->format('Y-m-d H:i:s')  ]);

        DB::insert('insert into inventarios (id,medicamento_id, cantidad,  created_at, updated_at) 
        values (?, ?, ?, ?, ?)', [6, 6, "2" ,  Carbon::create(1998, 12, 9,), Carbon::now()->format('Y-m-d H:i:s'),Carbon::now()->format('Y-m-d H:i:s')  ]);

        DB::insert('insert into inventarios (id,medicamento_id, cantidad,  created_at, updated_at) 
        values (?, ?, ?, ?, ?)', [7, 7, "3" ,  Carbon::create(1998, 12, 9,), Carbon::now()->format('Y-m-d H:i:s'),Carbon::now()->format('Y-m-d H:i:s')  ]);

        DB::insert('insert into inventarios (id,medicamento_id, cantidad,  created_at, updated_at) 
        values (?, ?, ?, ?, ?)', [8, 8, "4" ,  Carbon::create(1998, 12, 9,), Carbon::now()->format('Y-m-d H:i:s'),Carbon::now()->format('Y-m-d H:i:s')  ]);

        DB::insert('insert into inventarios (id,medicamento_id, cantidad,  created_at, updated_at) 
        values (?, ?, ?, ?, ?)', [9, 9, "6" ,  Carbon::create(1998, 12, 9,), Carbon::now()->format('Y-m-d H:i:s'),Carbon::now()->format('Y-m-d H:i:s')  ]);

        DB::insert('insert into inventarios (id,medicamento_id, cantidad,  created_at, updated_at) 
        values (?, ?, ?, ?, ?)', [10, 10, "8" ,  Carbon::create(1998, 12, 9,), Carbon::now()->format('Y-m-d H:i:s'),Carbon::now()->format('Y-m-d H:i:s')  ]);

    }
}
