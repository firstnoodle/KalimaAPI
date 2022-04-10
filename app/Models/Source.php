<?php

namespace App\Models;

use App\Models\Word;
use App\Models\Sentence;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Source extends Model
{
    use HasFactory;

    protected $fillable = [
        'sorani_alphabet',
        'kurdish_latin_alphabet',
        'ipa',
    ];

    public function words()
    {
        return $this->belongsToMany(Word::class);
    }

    public function sentences()
    {
        return $this->belongsToMany(Sentence::class);
    }
}
