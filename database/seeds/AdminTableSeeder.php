<?php

use App\User;
use App\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $user = new User();
      $user->name = 'Jorge';
      $user->lastName = 'Cardona';
      $user->email = 'jorge.cardona@edev.com';
      $user->password = Hash::make('JorgeCardonaADM');
      $user->save();

      $user = User::find(1);
      $admin = Role::where('name', 'admin')->first();
      $user->roles()->attach($admin);

      //-------------------------------------------------------------------------------------------------------------------------//

      $user = new User();
      $user->name = 'Anthony';
      $user->lastName = 'Trillo';
      $user->email = 'anthony.trillo@edev.com';
      $user->password = Hash::make('AnthonyTrilloADM');
      $user->save();

      $user = User::find(2);
      $admin = Role::where('name', 'admin')->first();
      $user->roles()->attach($admin);

      //-------------------------------------------------------------------------------------------------------------------------//

      $user = new User();
      $user->name = 'David';
      $user->lastName = 'Sammartino';
      $user->email = 'david.sammartino@edev.com';
      $user->password = Hash::make('DavidSammartinoADM');
      $user->save();

      $user = User::find(3);
      $admin = Role::where('name', 'admin')->first();
      $user->roles()->attach($admin);

      //-------------------------------------------------------------------------------------------------------------------------//

      $user = new User();
      $user->name = 'Paula';
      $user->lastName = 'Carluccio';
      $user->email = 'paula.carluccio@edev.com';
      $user->password = Hash::make('PaulaCarluccioADM');
      $user->save();

      $user = User::find(4);
      $admin = Role::where('name', 'admin')->first();
      $user->roles()->attach($admin);

    }
}
