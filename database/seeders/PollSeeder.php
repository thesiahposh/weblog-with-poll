<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PollSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $polls = [
            [
            'user_id' => 1,
            'type_id' => 1,
            'title' => 'تعطیلات آخر هفته خود را چگونه میگذرانید؟',
            'published' => true,
            'expired_at' => \Carbon\Carbon::now()->addMonth(),
            ],
            [
            'user_id' => 1,
            'type_id' => 1,
            'title' => 'چقدر در طول هفته مطالعه دارید؟',
            'published' => true,
            'expired_at' => \Carbon\Carbon::now()->addDays(20),
            ],
            [
                'user_id' => 1,
                'type_id' => 2,
                'title' => 'به کدام یک از برندهای زیر علاقه دارید؟',
                'published' => true,
                'expired_at' => \Carbon\Carbon::now()->addHour(),
            ],
        ];
        \DB::table('polls')->insert($polls);
    }
}
