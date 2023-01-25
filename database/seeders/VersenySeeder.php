<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Verseny;

class VersenySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Verseny::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');


        $model = new Verseny();
        $model->nev = 'Hungaroring';
        $model->hossz = 110;
        $model->kor = 70;
        $model->save();
    }
}
