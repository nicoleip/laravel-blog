<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Setting::create([
            'site_name' => "Laravel's Blog",
            'address' => 'Sofia',
            'contact_number' => '12345678',
            'contact_email' => 'info@test.com'
        ]);
    }
}
