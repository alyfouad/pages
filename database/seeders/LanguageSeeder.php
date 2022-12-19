<?php

namespace Database\Seeders;

use App\Models\Language;
use Illuminate\Database\Seeder;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Language::truncate();

        $languages = json_decode(file_get_contents(storage_path() . "/students.json"), true);
        foreach($languages as $key => $language) {
            Language::create([
                'name' => $language['name'],
                'code' => $language['code'],
                'description' => $language['description'],
            ]);
        }


    }
}
