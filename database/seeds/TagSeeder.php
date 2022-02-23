<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Tag;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = ['Italiano','Internazionale','prova1','prova2','test1','test2'];

        foreach($tags as $tag){
            $newTag = new Tag();
            $newTag->name = $tag;
            $newTag->slug = Str::of($newTag->name)->slug('-');
            $newTag->save();
        };
    }
}
