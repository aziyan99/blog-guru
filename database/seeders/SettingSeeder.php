<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Laravolt\Avatar\Avatar;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //logo
        $avatar = new Avatar();
        $image = time() . ".png";
        $avatar->create('Nama Sekolah')->save(storage_path('app/public/logo/' . $image));
        $saveImage = "logo/" . $image;
        DB::table('settings')->truncate();
        Setting::create([
            'school_name' => 'Nama Sekolah',
            'logo' => $saveImage,
            'email' => 'sekolah@example.com',
            'phone_number' => '+(62)821 7766 2211',
            'address' => 'Jalan Mekar Mawar'
        ]);
    }
}
