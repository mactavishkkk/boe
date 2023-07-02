<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EssentialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $maritalStatuses = [
            'Solteiro(a)',
            'Casado(a)',
            'União Estável',
            'Divorciado(a)',
            'Viúvo(a)',
            'Não informado'
        ];
        foreach ($maritalStatuses as $status) {
            DB::table('marital_status')->insert([
                'status' => $status,
            ]);
        }
    }
}
