<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $uuid = Str::uuid()->toString();
        DB::table('roles')->insert([
            'id' => 1,
            'name' => 'admin',
            'guard_name' => 'web',
        ]);

        $user = User::where("email", "admin@admin.com")->first();
        if (empty($user))
            $user = User::create([
                'id' => "9e2b81a9-3205-4992-9aef-077471eb9897",
                'name' => "admin",
                'email' => "admin@admin.com",
                'password' => Hash::make('password')
            ]);
        $user->assignRole('admin');
    }
}
