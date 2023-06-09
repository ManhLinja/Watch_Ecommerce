<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\UserRole;
use Carbon\Carbon;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UserRole::truncate();

        $user_role = new UserRole();
        $user_role->name = 'super_admin';
        $user_role->serial = '1';
        $user_role->slug = 'super_admin';
        $user_role->created_at = Carbon::now()->toDateTimeString();
        $user_role->save();

        $user_role = new UserRole();
        $user_role->name = 'admin';
        $user_role->serial = '2';
        $user_role->slug = 'admin';
        $user_role->created_at = Carbon::now()->toDateTimeString();
        $user_role->save();

        $user_role = new UserRole();
        $user_role->name = 'modarator';
        $user_role->serial = '3';
        $user_role->slug = 'modarator';
        $user_role->created_at = Carbon::now()->toDateTimeString();
        $user_role->save();

        $user_role = new UserRole();
        $user_role->name = 'user';
        $user_role->serial = '4';
        $user_role->slug = 'user';
        $user_role->created_at = Carbon::now()->toDateTimeString();
        $user_role->save();

        $user_role = new UserRole();
        $user_role->name = 'subscriber';
        $user_role->serial = '5';
        $user_role->slug = 'subscriber';
        $user_role->created_at = Carbon::now()->toDateTimeString();
        $user_role->save();

    }
}
