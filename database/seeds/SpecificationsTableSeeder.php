<?php

use App\Specification;
use Illuminate\Database\Seeder;

class SpecificationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Specification::create([
            'model' => 'OMEN X 65',
            'ver' => '1.3',
            'num' => '2',
            'manufacturer' => 'HPN',
            'vender_id' => '3612',
            'year' => '2018',
            'week' => '51',
        ]);

        Specification::create([
            'model' => 'OMEN X 65',
            'ver' => '1.3',
            'num' => '2',
            'manufacturer' => 'HPN',
            'vender_id' => '3613',
            'year' => '2018',
            'week' => '51',
        ]);

        Specification::create([
            'model' => 'OMEN X 65 SB',
            'ver' => '1.3',
            'num' => '2',
            'manufacturer' => 'HPN',
            'vender_id' => '3612',
            'year' => '2019',
            'week' => '7',
        ]);

        Specification::create([
            'model' => 'OMEN X 65 SB',
            'ver' => '1.3',
            'num' => '2',
            'manufacturer' => 'HPN',
            'vender_id' => '3600',
            'year' => '2019',
            'week' => '7',
        ]);

        Specification::create([
            'model' => 'OMEN X 65 SB',
            'ver' => '1.3',
            'num' => '2',
            'manufacturer' => 'HPN',
            'vender_id' => '3613',
            'year' => '2019',
            'week' => '7',
        ]);
    }
}

