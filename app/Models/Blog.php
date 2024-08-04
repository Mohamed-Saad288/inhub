<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory  , Sluggable;

    protected $fillable = [
        'title','slug' ,'description' , 'category_id','image','status','employee_id'
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
    public function scopeFilter(Builder $builder,$filters)
    {
        $builder->when($filters['title'] ?? false , function ($builder,$value){
            $builder->where('blogs.title','LIKE',"%{$value}%");
        });
        $builder->when($filters['status'] ?? false , function ($builder,$value){
            $builder->where('blogs.status',$value);
        });
    }

    public static function rules()
    {
        return [
            'title' => 'required|string|min:3|max:255',
            'description' => 'nullable|string',
            'status' => 'required|in:active,inactive',
            'image' => 'nullable|image',
            'category_id' => 'nullable|exists:categories,id'
        ];
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
