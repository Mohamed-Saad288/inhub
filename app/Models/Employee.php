<?php

namespace App\Models;

use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use \Illuminate\Foundation\Auth\User;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Employee extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'password',
        'phone_number',
        'is_manger'
    ];

    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }

        public function scopeFilter(Builder $query, array $filters)
    {
        $query->when($filters['search'] ?? false, function ($query, $search) {
            $query->where(function ($query) use ($search) {
                $query->where('name', 'like', '%' . $search . '%')
                    ->orWhere('phone_number', 'like', '%' . $search . '%')
                    ->orWhere('id', $search);
            });
        });

        return $query;
    }
    public function roles()
    {
        return  $this->belongsToMany(Role::class,'employee_role','employee_id','role_id','id','id');
    }
    public function hasAbility($ability)
    {
        return $this->roles()->whereHas('abilities', function ($query) use ($ability) {
            $query->where('ability', $ability)
                ->where('type', '=', 'allow');
        })->exists();
    }
}
