<?php

use Illuminate\Database\Seeder;

class customSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $log = new App\Log();
        $log->userId = 1;
        $log->match = 'oiefifeaof';
        $log->enemy =  'AI';
        $log->difficulty =  'medium';
        $log->moves = 3;
        $log->result = 'win';
        $log->save();

        $log = new App\Log();
        $log->userid = 2;
        $log->match = 'oiefifeaof';
        $log->enemy =  'AI';
        $log->difficulty =  'medium';
        $log->moves = 3;
        $log->result = 'win';
        $log->save();

        $log = new App\Log();
        $log->userid = 3;
        $log->match = 'oiefifeaof';
        $log->enemy =  'AI';
        $log->difficulty =  'medium';
        $log->moves = 3;
        $log->result = 'win';
        $log->save();
    }
}
