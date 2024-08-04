<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use http\Env\Request;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory , Sluggable;

    protected $fillable = ['name','description','status','slug'];


    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
    public static function rules()
    {
        return [
            'name' => 'required|string|min:3|max:255',
            'description' => 'nullable|string',
            'status' => 'required|in:active,inactive',
        ];
    }

    public function scopeFilter(Builder $builder,$filters)
    {
        $builder->when($filters['name'] ?? false , function ($builder,$value){
            $builder->where('categories.name','LIKE',"%{$value}%");
        });
        $builder->when($filters['status'] ?? false , function ($builder,$value){
            $builder->where('categories.status',$value);
        });
    }
    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }

}
