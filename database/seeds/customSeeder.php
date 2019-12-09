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
        $log->date = 'today';
        $log->enemy =  'AI';
        $log->difficulty =  'hard';
        $log->moves = 4;
        $log->result = 'loose';
        $log->save();

        $log = new App\Log();
        $log->userid = 2;
        $log->date = 'today';
        $log->enemy =  'User1';
        $log->difficulty =  'medium';
        $log->moves = 3;
        $log->result = 'win';
        $log->save();

        $log = new App\Log();
        $log->userid = 3;
        $log->date = 'today';
        $log->enemy =  'User2';
        $log->difficulty =  'easy';
        $log->moves = 6;
        $log->result = 'tie';
        $log->save();

        $u = new App\User();
        $u->username = 'user1';
        $u->email = 'user1@user1.com';
        $u->password =  '$2y$10$1LKXkI1RRsoO3Xh5PJxPr.Q505jVycLR1lYq17DIRlSdDfPkOZsZK';
        $u->save();

        $u = new App\User();
        $u->username = 'user2';
        $u->email = 'user2@user2.com';
        $u->password =  '$2y$10$1LKXkI1RRsoO3Xh5PJxPr.Q505jVycLR1lYq17DIRlSdDfPkOZsZK';
        $u->save();
    }
}
