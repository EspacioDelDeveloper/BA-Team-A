<?php

use App\Role;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $role = new Role();
      $role->name = 'developer';
      $role->save();

      $role = new Role();
      $role->name = 'editor';
      $role->save();

      $role = new Role();
      $role->name = 'recruiter';
      $role->save();

      $role = new Role();
      $role->name = 'admin';
      $role->save();
    }
}
