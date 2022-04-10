<?php

namespace Database\Seeders;

use App\Models\Word;
use Illuminate\Database\Seeder;

class KurdishSeeder extends Seeder
{
    const data = [
        [
            'sorani_alphabet' => 'من',
            'kurdish_latin_alphabet' => 'min',
            'ipa' => null,
        ],
        [
            'sorani_alphabet' => 'تۆ',
            'kurdish_latin_alphabet' => 'to',
            'ipa' => null,
        ],
        [
            'sorani_alphabet' => 'ئه‌و',
            'kurdish_latin_alphabet' => 'ew',
            'ipa' => null,
        ],
        [
            'sorani_alphabet' => 'گو',
            'kurdish_latin_alphabet' => 'gwê',
            'ipa' => null,
        ],
        /////////
        [
            'sorani_alphabet' => 'گو ێگرتن',
            'kurdish_latin_alphabet' => 'gwêgirtin',
            'ipa' => null,
        ],
        [
            'sorani_alphabet' => 'من گوێ ده‌گرم',
            'kurdish_latin_alphabet' => 'min gwê degirim',
            'ipa' => null,
        ],
        [
            'sorani_alphabet' => 'من گوێ له‌ تۆ ده‌گرم',
            'kurdish_latin_alphabet' => 'min gwê le to degirim',
            'ipa' => null,
        ],
        [
            'sorani_alphabet' => 'من گوێ ناگرم',
            'kurdish_latin_alphabet' => 'min gwê nagirim',
            'ipa' => null,
        ],
        [
            'sorani_alphabet' => 'من گوێ له‌ ئه‌و ناگرم',
            'kurdish_latin_alphabet' => 'min gwê le ew nagirim',
            'ipa' => null,
        ]
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
    }
}
