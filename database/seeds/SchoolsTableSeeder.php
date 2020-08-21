<?php

use App\School;
use Illuminate\Database\Seeder;

class SchoolsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1; $i>11; $i++){
            $school = new School();
            $school->title = "Jose {$i}";
            $school->slug = "jose-{$i}";
            $school->description = "Lorem ipsum dolor sit amet {$i}";
            $school->logo = "{$i}";
            $school->email = "demo-colegio{$i}@colegio-{$i}.com";
            $school->phone = '655 655 655';
            $school->website = "https://colegio-{$i}.com";
            $school->save();
        }
    }
}
