<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;
    protected $table = 'sub_categories';

    protected $fillable = [
        'translation_lang', 'translation_of', 'name', 'slug', 'photo', 'active', 'created_at', 'updated_at', 'parent_id'
    ];

    public function scopeActive($query)
    {
        return $query->where('active', 1);
    }

    public function scopeSelection($query)
    {

        return $query->select('id', 'translation_lang', 'name', 'slug', 'photo', 'active', 'translation_of', 'parent_id');
    }

    public function getPhotoAttribute($val)
    {
        return ($val !== null) ? asset('assets/' . $val) : "";
    }

    public function getActive()
    {
        return $this->active == 1 ? 'مفعل' : 'غير مفعل';
    }

    public function mainCategory()
    {
        return $this->belongsTo('App\Models\MainCategory', 'category_id', 'id');
    }
}