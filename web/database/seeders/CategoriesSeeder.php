<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void     */
    public function run()
    {
        Category::insert([
            [
                'id' => 1,
                'name' => 'Vay tiền online',
                'slug' => 'vay-tien-online',
                'prefix_template' => 'vay_tien_prev',
                'suffix_template' => 'vay_tien_suff'
            ],
            [
                'id' => 2,
                'name' => 'Vay tín chấp',
                'slug' => 'vay-tin-chap',
                'prefix_template' => 'vay_tin_chap_prev',
                'suffix_template' => 'vay_tin_chap_suff'
            ],
            [
                'id' => 3,
                'name' => 'Cầm đồ online',
                'slug' => 'cam-do-online',
                'prefix_template' => 'cam_do_prev',
                'suffix_template' => 'cam_do_suff'
            ]
        ]);
    }
}
