<?php

namespace Database\Seeders;

use App\Models\BillingInfo;
use Illuminate\Database\Seeder;

class BillingInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BillingInfo::factory()->count(2)->create();
    }
}
