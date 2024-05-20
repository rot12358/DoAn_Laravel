<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';
    public $timestamps = false;
    protected $fillable = [
        'theloaitruyen','is_active'
    ];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }


}
