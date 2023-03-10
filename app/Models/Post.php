<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable = [
        'title',
        'body',
        'image',
        'user_id',
        'category_id',
        'country_id',
        ];
        
    
    public function getByCategory($category, $country)
    {
        return $this->where("category_id", "=", $category->id)->where("country_id", "=", $country->id)->orderBy('updated_at', 'DESC')->paginate(3);
    }
    
    public function getByCategory_home($category, $user_id)
    {
        return $this->where("category_id", "=", $category->id)->where("user_id", "=", $user_id)->orderBy('updated_at', 'DESC')->paginate(3);
    }
    
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    
    public function country()
    {
        return $this->belongsTo(Country::class);
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
