<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title_ru',
        'title_en'
    ];

    public function getTitleAttribute(): ?string
    {
        return $this->{'title_' . app()->getLocale()}
            ?? $this->{'title_'
                . (
                    app()->getLocale() === 'ru' ? 'en' : 'ru'
                )};
    }
}
