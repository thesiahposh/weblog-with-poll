<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $questions = [
            ['user_id' => 1, 'poll_id' => 1 , 'q_body' => 'کتاب خواندن'],
            ['user_id' => 1, 'poll_id' => 1 , 'q_body' => 'استراحت کردن'],
            ['user_id' => 1, 'poll_id' => 1 , 'q_body' => 'فیلم و سریال دیدن'],
            ['user_id' => 1, 'poll_id' => 1 , 'q_body' => 'بیرون رفتن'],
            ['user_id' => 1, 'poll_id' => 2 , 'q_body' => 'بیشتر از 10 ساعت'],
            ['user_id' => 1, 'poll_id' => 2 , 'q_body' => 'بین 5 تا 10 ساعت'],
            ['user_id' => 1, 'poll_id' => 2 , 'q_body' => 'کمتر از 5 ساعت'],
            ['user_id' => 1, 'poll_id' => 3 , 'q_body' => 'سلامت و تندرستی'],
            ['user_id' => 1, 'poll_id' => 3 , 'q_body' => 'فرهنگ و هنر'],
            ['user_id' => 1, 'poll_id' => 3 , 'q_body' => 'افتصاد و درآمد'],
            ['user_id' => 1, 'poll_id' => 3 , 'q_body' => 'محیط زیست و تغییرات اقلیمی'],
        ];

        \DB::table('questions')->insert($questions);
    }
}
