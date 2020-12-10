<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->call(DoctorSeederTable::class);
        $this->call(MedicineSeederTable::class);
        $this->call(PatientSeederTable::class);
        $this->call(RecetasStatusSeederTable::class);
        $this->call(EmployesSeederTable::class);
        $this->call(DateSeederTable::class);
        $this->call(ProviderSeederTable::class);
        $this->call(MethodsPayTableSeeder::class);
        $this->call(RecetasTMedicasSeederTable::class);
        $this->call(RecetasTNMedicamentosSeederTable::class);
        $this->call(MyInventorySeederTable::class);
    }
}
