<?php


namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema; // Assurez-vous d'ajouter cette ligne

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();

        $this->call([
            UsersTableSeeder::class,
            InstallationsTableSeeder::class,
            EnergyProductionsTableSeeder::class,
            AlertsTableSeeder::class,
            MaintenanceTableSeeder::class,
            ReportsTableSeeder::class,
            // Ajoutez d'autres seeders ici au besoin
        ]);

        Schema::enableForeignKeyConstraints();
    }
}
