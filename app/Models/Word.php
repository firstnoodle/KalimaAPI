<?php

namespace App\Models;

use App\Models\Sentence;
use App\Models\Source;
use App\Models\Translation;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Word extends Model
{
    use HasFactory;

    protected $fillable = ['type'];

    
    public function sources()
    {
        return $this->belongsToMany(Source::class);
    }

    public function translations()
    {
        return $this->belongsToMany(Translation::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function sentences()
    {
        return $this->belongsToMany(Sentence::class);
    }
}
