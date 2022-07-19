<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Cviebrock\EloquentSluggable\Sluggable;

class Recipes extends Model
{
    use HasFactory;
    use Sluggable;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'recipes';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Indicates if the model's ID is auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = true;

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'category_id',
        'cuisines_id',
        'thumbnail_id',
        'title',
        'slug',
        'dsescription',
        'youtubevideo',
        'method',
        'difficlty',
        'preptime',
        'cooktime',
        'total',
        'servings',
        'yield',
        'ingredients',
        'directions',
        'nutritionFacts'
    ];

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    /**
     * Relationship : belongsTo user
     * Get the user that owns the profiles.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Relationship : belongsTo user
     * Get the user that owns the profiles.
     */
    public function Thumbnails()
    {
        return $this->belongsTo(Thumbnails::class);
    }

     /**
     * Relationship : belongsTo user
     * Get the user that owns the profiles.
     */
    public function Cuisines()
    {
        return $this->belongsTo(Cuisines::class);
    }

     /**
     * Relationship : belongsTo user
     * Get the user that owns the profiles.
     */
    public function Categories()
    {
        return $this->belongsTo(Categories::class);
    }
}
