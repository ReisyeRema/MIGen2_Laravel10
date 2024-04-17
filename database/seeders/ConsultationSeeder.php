<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MasterData\Consultation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ConsultationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $consultation = [
            [
                'name' => 'Jantung Sesak', 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s'), 
            ],
            [
                'name' => 'Tekanan Darah Tinggi', 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s'), 
            ],
            [
                'name' => 'Gangguan Irama Jantung',
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s'), 
            ],  
                
        ];

        // this array $consultation will be insert to table 'consultation'
        Consultation::insert($consultation);
    }
}
