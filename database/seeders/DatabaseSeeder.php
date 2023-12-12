<?php

namespace Database\Seeders;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call(customersSeeder::class);
        $this->call(orderSeeder::class);
        $this->call(dishSeeder::class);
        $this->call(invoiceDetailSeeder::class);
        $this->call(MesaSeeder::class);

    }
}
