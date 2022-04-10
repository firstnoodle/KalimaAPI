<?php

namespace Database\Seeders;

use App\Models\Tag;
use App\Models\Translation;
use App\Models\Word;
use Illuminate\Database\Seeder;
use Symfony\Component\Yaml\Yaml;

class WordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $words = Yaml::parse(
            file_get_contents('./database/seeders/data/words.yml')
        );

        foreach($words as $wordData)
        {
            $word = Word::create();

            foreach($wordData['sources'] as $source)
            {
                $word->sources()->create($source);
            }

            foreach($wordData['translations'] as $translation)
            {
                $t = Translation::firstOrCreate([
                    'translation' => $translation]
                );
                $word->translations()->attach($t);
            }

            foreach($wordData['tags'] as $tag)
            {
                $t = Tag::firstOrCreate(['name' => $tag]);
                $word->tags()->attach($t);
            }
        }
    }
}
