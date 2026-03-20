<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $password           = Hash::make('Agniack@90');
        $admin              = new Admin();
        $admin->name        = 'Grafikomsen';
        $admin->role        = 'admin';
        $admin->email       = 'dev.graphikomsen@gmail.com';
        $admin->password    = $password;
        $admin->status      = 1;
        $admin->save();
    }
}
