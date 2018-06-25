<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        factory(App\User::class)->create([
            'name' => '自分',
            'email' => 'aaa@example.com',
        ]);
        
        factory(App\User::class, 9)->create();
        // $this->call(UsersTableSeeder::class);
        
        factory(App\Admin::class)->create([
            'username' => 'taro',
            'password' => 'jiro',
        ]);
        
    }
}
