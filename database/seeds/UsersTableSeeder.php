<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
 
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){ 
      
        App\Model\Users::truncate();

        factory(App\Model\Users::class)->create();
    }
} 
