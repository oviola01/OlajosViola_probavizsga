<?php

namespace Database\Seeders;

use App\Models\Kategoria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kategoria::create([
            'kategorianev' => 'Természetvédelem',
        ]);
        
        Kategoria::create([
            'kategorianev' => 'Grafikai technikák',
        ]);
    }
}
