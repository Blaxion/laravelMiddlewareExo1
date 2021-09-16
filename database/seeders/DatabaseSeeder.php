<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            ['rank'=>'admin'],
            ['rank'=>'webmaster'],
            ['rank'=>'redacteur'],
            ['rank'=>'membre']
        ]);
        DB::table('users')->insert([
            [
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'role_id' => 1,
                'password' => bcrypt('laravel')
            ],
            [
                'name' => 'Webmaster',
                'email' => 'wm@wm.com',
                'role_id' => 2,
                'password' => bcrypt('laravel')
            ],
            [
                'name' => 'Redacteur',
                'email' => 'redac@redac.com',
                'role_id' => 3,
                'password' => bcrypt('laravel')
            ],
            [
                'name' => 'Membre',
                'email' => 'member@member.com',
                'role_id' => 4,
                'password' => bcrypt('laravel')
            ]
        ]);

        DB::table('articles')->insert([
            [
                'title'=>'aaaaaaaaaaaaaaaaaaa',
                'text'=>'aaaaaaaaaaaaaaaaaaaaa aaaaaaaaaaaaaaaaaaaaaa aaaaaaaaaaaaaaaaaaaaaaaa aaaaaaaaaaaaaaaaaa aaaaaaaaaaaaaaaaaaaaaaa',
                'user_id'=>1,
            ],
            [
                'title'=>'bbbbbbbbbbbbbbbbbbbb',
                'text'=>'bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb',
                'user_id'=>2,
            ],
            [
                'title'=>'ccccccccccccccccccc',
                'text'=>'ccccccccccccccccccc ccccccccccccccccccc ccccccccccccccccccc ccccccccccccccccccc ccccccccccccccccccc ccccccccccccccccccc ',
                'user_id'=>3,
            ],
        ]);

        

        
    }
}
