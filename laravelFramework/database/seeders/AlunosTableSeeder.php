<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlunosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('alunos')->insert([
            ['nome'=>'Ana Silva','email'=>'ana@ifms.edu.br','dataNascimento'=>'2000-01-01','curso'=>'Sistemas operacionais']
        ]);
    }
}
