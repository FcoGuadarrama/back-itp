<?php

namespace Database\Seeders;

use App\Models\User;
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
    User::create([
      'name' => 'Alejandro Saldaña',
      'email' => 'alex@admin.com',
      'password' => bcrypt('hola123'),
    ]);

  }
}
