<?php

use App\Student;
use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1; $i>11; $i++){
            $student = new Student();
            $student->name = "Jose {$i}";
            $student->slug = "jose-{$i}";
            $student->surname = "perez rodriguez {$i}";
            $student->school_id = "{$i}";
            $student->date = '2020-06-20 14:15:16';
            $student->city = '2020-06-20 14:15:16';
            $student->save();
        }

    }
}
