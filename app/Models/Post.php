<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];

    public static function boot() {
        parent::boot();

        self::creating(function ($post) {
            if (request()->category && !request()->routeIs('categories.*'))
                $post->category()->associate(Category::find(request()->category));
            $post->user()->associate(auth()->user()->id);
        });
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }
}
