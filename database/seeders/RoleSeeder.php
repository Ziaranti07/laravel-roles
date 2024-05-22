<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;


class RoleSeeder extends Seeder
{
   /**
    * Run the database seeds.
    */
   public function run(): void
   {
       Role::create(['name' => 'adminbaak']);
       $admin = Role::create(['name' => 'adminkeuangan']);
       $mahasiswa = Role::create(['name' => 'mahasiswa']);

       $admin->givePermissionTo([
          'show-mahasiswa',
   ]);

       $mahasiswa->givePermissionTo([
           'show-mahasiswa',
           'edit-mahasiswa',
       ]);

   }
}
