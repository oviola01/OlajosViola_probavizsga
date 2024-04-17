<?php

namespace Database\Seeders;

use App\Models\Teszt;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TesztSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Teszt::create([
            'kerdes' => 'A papírt milyen színű szelektív kukába gyűjtjük?',
            'v1' => 'kék',
            'v2' => 'piros',
            'v3' => 'szürke',
            'v4' => 'sárga',
            //'helyes' => 0, - alapértelmezett, nincs rá szükség
            'kategoriaId' => 1,
        ]);

        Teszt::create([
            'kerdes' => 'Melyek komposztálhatóak?',
            'v1' => 'zöldség-gyümölcs maradék, tojáshéj',
            'v2' => 'nagy ágak, fatörzsek, diófalevél',
            'v3' => 'fém, műanyag, vegyszeres dolgok',
            'v4' => 'ruhanemű, törlőruha, egyéb textilek',
            'kategoriaId' => 1,
        ]);

        Teszt::create([
            'kerdes' => 'Mi az aquatinta magyar megnevezése?',
            'v1' => 'tusfestés',
            'v2' => 'akvarell',
            'v3' => 'borzolás',
            'v4' => 'foltmaratás',
            'helyes' => 3,
            'kategoriaId' => 2,
        ]);

        Teszt::create([
            'kerdes' => 'Az alábbiak közül melyik magasnyomásos eljárás?',
            'v1' => 'hidegtű',
            'v2' => 'fametszet',
            'v3' => 'rézkarc',
            'v4' => 'litográfia',
            'helyes' => 1,
            'kategoriaId' => 2,
        ]);
    }
}
