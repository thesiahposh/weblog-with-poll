<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types=[
            ['type'=>'radio'],
            ['type'=>'checkbox'],
        ];
        \DB::table('types')->insert($types);
    }
}
