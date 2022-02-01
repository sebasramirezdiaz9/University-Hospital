<?php

namespace Database\Seeders;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class ProviderSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::insert('insert into proveedores (id, razon_social, telefono, contacto_directo,created_at, updated_at) 
        values (?, ?, ?, ?, ?, ?)', [1, 'Bio-Mac GROUP', '4495214576', 'Carlos Fuentes Villalpando',  Carbon::create(1998, 12, 9,), Carbon::now()->format('Y-m-d H:i:s'),Carbon::now()->format('Y-m-d H:i:s')  ]);

        DB::insert('insert into proveedores (id, razon_social, telefono, contacto_directo,created_at, updated_at) 
        values (?, ?, ?, ?, ?, ?)', [2, 'Economia Farmaceutica', '8002354123', 'Andrea Gutierrez Placencia',  Carbon::create(1998, 12, 9,), Carbon::now()->format('Y-m-d H:i:s'),Carbon::now()->format('Y-m-d H:i:s')  ]);

        DB::insert('insert into proveedores (id, razon_social, telefono, contacto_directo,created_at, updated_at) 
        values (?, ?, ?, ?, ?, ?)', [3, 'Comercializadora Lini', '4495234512', 'Diana Laura Martinez',  Carbon::create(1998, 12, 9,), Carbon::now()->format('Y-m-d H:i:s'),Carbon::now()->format('Y-m-d H:i:s')  ]);

        DB::insert('insert into proveedores (id, razon_social, telefono, contacto_directo,created_at, updated_at) 
        values (?, ?, ?, ?, ?, ?)', [4, 'DQ Microbiología y laboratorio', '4495231235', 'Sebastian Ramirez Diaz',  Carbon::create(1998, 12, 9,), Carbon::now()->format('Y-m-d H:i:s'),Carbon::now()->format('Y-m-d H:i:s')  ]);

        DB::insert('insert into proveedores (id, razon_social, telefono, contacto_directo,created_at, updated_at) 
        values (?, ?, ?, ?, ?, ?)', [5, 'Grupo Crusan', '4498523212', 'Antonio Pedroza Lopez',  Carbon::create(1998, 12, 9,), Carbon::now()->format('Y-m-d H:i:s'),Carbon::now()->format('Y-m-d H:i:s')  ]);

        DB::insert('insert into proveedores (id, razon_social, telefono, contacto_directo,created_at, updated_at) 
        values (?, ?, ?, ?, ?, ?)', [6, 'Farmacon', '4494523212', 'Gonzalo Diaz Martinez',  Carbon::create(1998, 12, 9,), Carbon::now()->format('Y-m-d H:i:s'),Carbon::now()->format('Y-m-d H:i:s')  ]);

        DB::insert('insert into proveedores (id, razon_social, telefono, contacto_directo,created_at, updated_at) 
        values (?, ?, ?, ?, ?, ?)', [7, 'Ralca', '4494521236', 'Hector Rendon ',  Carbon::create(1998, 12, 9,), Carbon::now()->format('Y-m-d H:i:s'),Carbon::now()->format('Y-m-d H:i:s')  ]);

        DB::insert('insert into proveedores (id, razon_social, telefono, contacto_directo,created_at, updated_at) 
        values (?, ?, ?, ?, ?, ?)', [8, 'Tecnocaps', '4494521236', 'Paola Miramontes ',  Carbon::create(1998, 12, 9,), Carbon::now()->format('Y-m-d H:i:s'),Carbon::now()->format('Y-m-d H:i:s')  ]);

        DB::insert('insert into proveedores (id, razon_social, telefono, contacto_directo,created_at, updated_at) 
        values (?, ?, ?, ?, ?, ?)', [9, 'VICMA', '4498523212', 'Maria de Jesus Dueñas',  Carbon::create(1998, 12, 9,), Carbon::now()->format('Y-m-d H:i:s'),Carbon::now()->format('Y-m-d H:i:s')  ]);

        DB::insert('insert into proveedores (id, razon_social, telefono, contacto_directo,created_at, updated_at) 
        values (?, ?, ?, ?, ?, ?)', [10, 'Tecsiquim', '4498524563', 'Luis Antonio Garcia',  Carbon::create(1998, 12, 9,), Carbon::now()->format('Y-m-d H:i:s'),Carbon::now()->format('Y-m-d H:i:s')  ]);


    }
}
