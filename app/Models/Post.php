<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'title',
        'body',
        'image',
        'category_id',
        'country_id',
        ];
    
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    
    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
