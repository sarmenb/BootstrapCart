<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
    	  'name' => 'sarmen boyadjian',
          'slug' => 'sarmen-boyadjian',
    	  'email' => 'sarmenbj@gmail.com',
    	  'password' => bcrypt('flash818'),
          'email_verified_at' => now()
        ]);

        $user->assignRole('admin');

        $customer = User::create([
            'name' => 'customer',
            'slug' => 'customer',
            'email' => 'customer@gmail.com',
            'password' => bcrypt('flash818'),
            'email_verified_at' => now()
        ]);

        $customer->assignRole('customer');
    }
}
