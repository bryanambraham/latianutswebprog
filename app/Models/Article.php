<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $fillable = ['title','description','summary','published_date','writer_id','category_id'];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function writer() {
        return $this->belongsTo(Writer::class);
    }
}
