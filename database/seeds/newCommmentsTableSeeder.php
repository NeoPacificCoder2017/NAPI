<?php

use Illuminate\Database\Seeder;

class newCommmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $newComments = [];

        for($i = 0; $i < 10; $i++):
            $newId = rand(1, 10);
            $userId = rand(1, 10);
            


            $newComments[] = [
                'new_id' => $newId, 
                'user_id' => $userId,
                'comment' => str_random(250),
                
            ];

        endfor;

        foreach ($newComments AS $newComment):

            newComment::create($newComments);

        endforeach;
        
    }
}
