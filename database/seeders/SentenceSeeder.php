<?php

namespace Database\Seeders;

use App\Models\Sentence;
use App\Models\Translation;
use App\Models\Word;
use Illuminate\Database\Seeder;
use Symfony\Component\Yaml\Yaml;

class SentenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sentences = Yaml::parse(
            file_get_contents('./database/seeders/data/sentences.yml')
        );

        foreach($sentences as $sentenceData)
        {
            $sentence = Sentence::create();


            foreach($sentenceData['sources'] as $source)
            {
                $sentence->sources()->create($source);
            }

            foreach($sentenceData['translations'] as $translation)
            {
                $t = Translation::firstOrCreate([
                    'translation' => $translation]
                );
                $sentence->translations()->attach($t);
            }

            foreach($sentenceData['words'] as $word)
            {
                $w = Word::whereHas(
                    'translations', 
                    function($query) use ($word) {
                        return $query->where('translation', $word);
                    }
                )->get();

                if($w->count() > 1)
                {
                    throw new \Exception('this shouldt happen');
                }
                else if($w->count() === 1)
                {
                    $sentence->words()->attach($w);
                }
            }
        }
    }
}
