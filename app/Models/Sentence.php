<?php

namespace App\Models;

use App\Models\Source;
use App\Models\Translation;
use App\Models\Word;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sentence extends Model
{
    use HasFactory;

    public function sources()
    {
        return $this->belongsToMany(Source::class);
    }

    public function translations()
    {
        return $this->belongsToMany(Translation::class);
    }

    public function words()
    {
        return $this->belongsToMany(Word::class);
    }
}
