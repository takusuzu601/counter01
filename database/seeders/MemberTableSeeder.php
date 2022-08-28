<?php

namespace Database\Seeders;

use App\Models\Member;
use Illuminate\Database\Seeder;

class MemberTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $members = [
            "鈴木",
            "大江",
            "柴山",
            "伊藤"
            ];
            foreach ($members as $member) {
                Member::create([
                    'name' => $member
                ]);
            }
    }
}
