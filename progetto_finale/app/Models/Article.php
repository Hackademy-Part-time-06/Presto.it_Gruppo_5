<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'category_id', 'title', 'price', 'description'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongTo(User::class);
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }

    public static function toBeRevisionatedCount()
    {
        return Article::where('is_accepted', null)->count();
    }
}
