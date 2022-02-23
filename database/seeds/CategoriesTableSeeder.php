<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = ['Food','Entertainment','Sport','Economy','News','event','Utility','Educational','Style'];

        foreach($array as $elem){
            $newCategory = new Category();
            $newCategory->name = $elem;
            $newCategory->slug = Str::of($newCategory->name)->slug('-');
            $newCategory->save();
        }
    }
}
