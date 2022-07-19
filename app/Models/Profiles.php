<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Cviebrock\EloquentSluggable\Sluggable;

class Profiles extends Model
{
    use HasFactory;
    use Sluggable;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'profiles';

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
        'country_id',
        'language_id',
        'genders_id',
        'fullName',
        'slug',
        'bio',
        'quotes',
        'birthday',
        'avatar',
        'facebook',
        'linkedIn',
        'instagram',
        'youtube',
        'website'
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
                'source' => 'fullName'
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
     * Relationship : One To One
     * Get the Languages associated with the user.
     */
    public function Languages()
    {
        return $this->hasOne(Languages::class);
    }

    /**
     * Relationship : One To One
     * Get the Genders associated with the user.
     */
    public function Genders()
    {
        return $this->hasOne(Genders::class);
    }

     /**
     * Relationship : One To One
     * Get the Countries associated with the user.
     */
    public function Countries()
    {
        return $this->hasOne(Countries::class);
    }
}
