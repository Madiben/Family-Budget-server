<?php

namespace Database\Seeders;

use App\Models\budget as ModelsBudget;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class budgetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('budgets')->truncate();
        ModelsBudget::factory(10)->create();
    }
}
