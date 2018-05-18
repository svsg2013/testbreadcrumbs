<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $fillable = ['name', 'description', 'imgs'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function ingredient()
    {
        return $this->hasMany(RecipeIngredient::class);
    }

    public function direction()
    {
        return $this->hasMany(RecipeDirection::class);
    }

    public static function form()
    {
        return [
            'name' => '',
            'description' => '',
            'ingredients' =>[
                RecipeIngredient::form()
            ],
            'directions' => [
                RecipeDirection::form(),
                RecipeDirection::form()
            ]

        ];
    }
}
