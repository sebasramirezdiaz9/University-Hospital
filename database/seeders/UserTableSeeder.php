<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert('insert into users (id, name, email, email_verified_at, password, status, created_at, updated_at) 
        values (?, ?, ?, ?, ?, ?, ?, ?)', [1, 'Administrator', 'admin@email.com', Carbon::now()->format('Y-m-d H:i:s'),bcrypt('12345678'), true, Carbon::now()->format('Y-m-d H:i:s'), Carbon::now()->format('Y-m-d H:i:s') ]);
        DB::insert('insert into users (id, name, email, email_verified_at, password, status, created_at, updated_at) 
        values (?, ?, ?, ?, ?, ?, ?, ?)', [2, 'Doctor', 'alejandra@email.com', Carbon::now()->format('Y-m-d H:i:s'),bcrypt('12345678'), true, Carbon::now()->format('Y-m-d H:i:s'), Carbon::now()->format('Y-m-d H:i:s') ]);

        DB::insert('insert into users (id, name, email, email_verified_at, password, status, created_at, updated_at) 
        values (?, ?, ?, ?, ?, ?, ?, ?)', [3, 'Doctor', 'luis@email.com', Carbon::now()->format('Y-m-d H:i:s'),bcrypt('12345678'), true, Carbon::now()->format('Y-m-d H:i:s'), Carbon::now()->format('Y-m-d H:i:s') ]);

        DB::insert('insert into users (id, name, email, email_verified_at, password, status, created_at, updated_at) 
        values (?, ?, ?, ?, ?, ?, ?, ?)', [4, 'Doctor', 'carlos@email.com', Carbon::now()->format('Y-m-d H:i:s'),bcrypt('12345678'), true, Carbon::now()->format('Y-m-d H:i:s'), Carbon::now()->format('Y-m-d H:i:s') ]);

        DB::insert('insert into users (id, name, email, email_verified_at, password, status, created_at, updated_at) 
        values (?, ?, ?, ?, ?, ?, ?, ?)', [5, 'Doctor', 'gustavo@email.com', Carbon::now()->format('Y-m-d H:i:s'),bcrypt('12345678'), true, Carbon::now()->format('Y-m-d H:i:s'), Carbon::now()->format('Y-m-d H:i:s') ]);

        DB::insert('insert into users (id, name, email, email_verified_at, password, status, created_at, updated_at) 
        values (?, ?, ?, ?, ?, ?, ?, ?)', [6, 'Doctor', 'angel@email.com', Carbon::now()->format('Y-m-d H:i:s'),bcrypt('12345678'), true, Carbon::now()->format('Y-m-d H:i:s'), Carbon::now()->format('Y-m-d H:i:s') ]);

        DB::insert('insert into users (id, name, email, email_verified_at, password, status, created_at, updated_at) 
        values (?, ?, ?, ?, ?, ?, ?, ?)', [7, 'Doctor', 'emma@email.com', Carbon::now()->format('Y-m-d H:i:s'),bcrypt('12345678'), true, Carbon::now()->format('Y-m-d H:i:s'), Carbon::now()->format('Y-m-d H:i:s') ]);

        DB::insert('insert into users (id, name, email, email_verified_at, password, status, created_at, updated_at) 
        values (?, ?, ?, ?, ?, ?, ?, ?)', [8, 'Doctor', 'cristina@email.com', Carbon::now()->format('Y-m-d H:i:s'),bcrypt('12345678'), true, Carbon::now()->format('Y-m-d H:i:s'), Carbon::now()->format('Y-m-d H:i:s') ]);

        DB::insert('insert into users (id, name, email, email_verified_at, password, status, created_at, updated_at) 
        values (?, ?, ?, ?, ?, ?, ?, ?)', [9, 'Doctor', 'carolina@email.com', Carbon::now()->format('Y-m-d H:i:s'),bcrypt('12345678'), true, Carbon::now()->format('Y-m-d H:i:s'), Carbon::now()->format('Y-m-d H:i:s') ]);

        DB::insert('insert into users (id, name, email, email_verified_at, password, status, created_at, updated_at) 
        values (?, ?, ?, ?, ?, ?, ?, ?)', [10, 'Doctor', 'ale@email.com', Carbon::now()->format('Y-m-d H:i:s'),bcrypt('12345678'), true, Carbon::now()->format('Y-m-d H:i:s'), Carbon::now()->format('Y-m-d H:i:s') ]);

        DB::insert('insert into users (id, name, email, email_verified_at, password, status, created_at, updated_at) 
        values (?, ?, ?, ?, ?, ?, ?, ?)', [11, 'Empleado', 'beatriz@email.com', Carbon::now()->format('Y-m-d H:i:s'),bcrypt('12345678'), true, Carbon::now()->format('Y-m-d H:i:s'), Carbon::now()->format('Y-m-d H:i:s') ]);

        DB::insert('insert into users (id, name, email, email_verified_at, password, status, created_at, updated_at) 
        values (?, ?, ?, ?, ?, ?, ?, ?)', [12, 'Empleado', 'daniela@email.com', Carbon::now()->format('Y-m-d H:i:s'),bcrypt('12345678'), true, Carbon::now()->format('Y-m-d H:i:s'), Carbon::now()->format('Y-m-d H:i:s') ]);

        DB::insert('insert into users (id, name, email, email_verified_at, password, status, created_at, updated_at) 
        values (?, ?, ?, ?, ?, ?, ?, ?)', [13, 'Empleado', 'maria@email.com', Carbon::now()->format('Y-m-d H:i:s'),bcrypt('12345678'), true, Carbon::now()->format('Y-m-d H:i:s'), Carbon::now()->format('Y-m-d H:i:s') ]);

        DB::insert('insert into users (id, name, email, email_verified_at, password, status, created_at, updated_at) 
        values (?, ?, ?, ?, ?, ?, ?, ?)', [14, 'Empleado', 'german@email.com', Carbon::now()->format('Y-m-d H:i:s'),bcrypt('12345678'), true, Carbon::now()->format('Y-m-d H:i:s'), Carbon::now()->format('Y-m-d H:i:s') ]);

        DB::insert('insert into users (id, name, email, email_verified_at, password, status, created_at, updated_at) 
        values (?, ?, ?, ?, ?, ?, ?, ?)', [15, 'Empleado', 'fernando@email.com', Carbon::now()->format('Y-m-d H:i:s'),bcrypt('12345678'), true, Carbon::now()->format('Y-m-d H:i:s'), Carbon::now()->format('Y-m-d H:i:s') ]);

        DB::insert('insert into users (id, name, email, email_verified_at, password, status, created_at, updated_at) 
        values (?, ?, ?, ?, ?, ?, ?, ?)', [16, 'Empleado', 'alfredo@email.com', Carbon::now()->format('Y-m-d H:i:s'),bcrypt('12345678'), true, Carbon::now()->format('Y-m-d H:i:s'), Carbon::now()->format('Y-m-d H:i:s') ]);

        DB::insert('insert into users (id, name, email, email_verified_at, password, status, created_at, updated_at) 
        values (?, ?, ?, ?, ?, ?, ?, ?)', [17, 'Empleado', 'ana@email.com', Carbon::now()->format('Y-m-d H:i:s'),bcrypt('12345678'), true, Carbon::now()->format('Y-m-d H:i:s'), Carbon::now()->format('Y-m-d H:i:s') ]);

        DB::insert('insert into users (id, name, email, email_verified_at, password, status, created_at, updated_at) 
        values (?, ?, ?, ?, ?, ?, ?, ?)', [18, 'Empleado', 'lorena@email.com', Carbon::now()->format('Y-m-d H:i:s'),bcrypt('12345678'), true, Carbon::now()->format('Y-m-d H:i:s'), Carbon::now()->format('Y-m-d H:i:s') ]);

        DB::insert('insert into users (id, name, email, email_verified_at, password, status, created_at, updated_at) 
        values (?, ?, ?, ?, ?, ?, ?, ?)', [19, 'Empleado', 'lizeth@email.com', Carbon::now()->format('Y-m-d H:i:s'),bcrypt('12345678'), true, Carbon::now()->format('Y-m-d H:i:s'), Carbon::now()->format('Y-m-d H:i:s') ]);

        DB::insert('insert into users (id, name, email, email_verified_at, password, status, created_at, updated_at) 
        values (?, ?, ?, ?, ?, ?, ?, ?)', [20, 'Empleado', 'karen@email.com', Carbon::now()->format('Y-m-d H:i:s'),bcrypt('12345678'), true, Carbon::now()->format('Y-m-d H:i:s'), Carbon::now()->format('Y-m-d H:i:s') ]);

        

    }
}
