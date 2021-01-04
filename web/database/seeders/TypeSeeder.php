<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Type::insert([
            [
                'id' => 1,
                'name' => 'Kiến thức vay tiền nhanh',
                'slug' => 'kien-thuc-vay-tien-nhanh',
            ],
            [
                'id' => 2,
                'name' => 'Kiến thức thẻ tín dụng',
                'slug' => 'kien-thuc-the-tin-dung',
            ],
            [
                'id' => 3,
                'name' => 'Kiến thức cầm đồ',
                'slug' => 'kien-thuc-cam-do',
            ]
        ]);
    }
}
