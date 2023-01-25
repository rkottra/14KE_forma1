<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Pilota;

class PilotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Pilota::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');


/*        $model = new Pilota();
        $model->nev = 'Hamilton';
        $model->rovidnev = 'HAM';
        $model->save();*/
        Pilota::factory()->count(20)->create();
    }
}
