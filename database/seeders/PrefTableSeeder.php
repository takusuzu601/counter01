<?php

namespace Database\Seeders;

use App\Models\Pref;
use Illuminate\Database\Seeder;

class PrefTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $prefs = [
            "羽束師",
            "伊勢田",
            "西大久保",
            "野洲",
            "守山",
            "野路",
            "野洲守山ペア",
            "草津",
            "花山",
            "その他赤",
            "4便",
            "7件",
            "8件",
            "鷹飼",
            "若宮",
            "沖野",
            '平津',
            "手原",
            "深草",
            "小倉小倉西",
            "その他青",
            ];
            foreach ($prefs as $pref) {
                Pref::create([
                    'name' => $pref
                ]);
            }
    }
}
