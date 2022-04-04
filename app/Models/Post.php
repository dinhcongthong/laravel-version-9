<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';

    protected $fillable = ['id', 'name', 'content', 'imgs', 'title', 'piority', 'author_name', 'created_at', 'updated_at'];

    public function getImg() {
        return $this->hasOne('App\Models\Photos', 'photo_id', 'imgs');
    }
}
