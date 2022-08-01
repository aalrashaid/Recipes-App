<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Gender extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];

    /**
     * Gender model has many profile model.
     *
     * @return BelongsTo
     */
    public function Profiles() : BelongsTo
    {
        return $this->belongsTo(Profile::class, 'id', 'gender_id');
    }
}
