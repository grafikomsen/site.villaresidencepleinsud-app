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
        $password           = Hash::make('admin123');
        $admin              = new Admin();
        $admin->name        = 'Grafikomsen';
        $admin->role        = 'admin';
        $admin->email       = 'admin@villa.test';
        $admin->password    = $password;
        $admin->status      = 1;
        $admin->save();
    }
}
