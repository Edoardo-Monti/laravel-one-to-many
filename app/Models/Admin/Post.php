<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = 'posts';

    protected $fillable = [
        "title",
        "description",
        "slug"
    ];


    public function type(){
        return $this->belongsTo(Type::class);
    }
}
