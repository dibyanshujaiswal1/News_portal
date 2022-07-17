<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable=['article_heading','slug','article_description','author_name','published_date','article_mage','status','type','meta_title','meta_keyword','meta_description'];
}
