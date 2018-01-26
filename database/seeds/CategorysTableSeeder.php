<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Category;
class CategorysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $categorys = [];

        for($i = 0; $i < 10; $i++):
            
            $categorys[] = [
                'name'=> str_random(10),
            ];
        endfor;

        foreach($categorys AS $category):
            Category::create($category);
        endforeach;
    }
}
