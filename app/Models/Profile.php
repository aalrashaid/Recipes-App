<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class Profile extends Model
{
    use HasFactory;
    use Sluggable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'country_id',
        'language_id',
        'gender_id',
        'full_name',
        'slug',
        'bio',
        'quotes',
        'birthday',
        'avatar',
        'facebook',
        'linkedin',
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
                'source' => 'full_name'
            ]
        ];
    }

    public function delete()
    {
        $this->deleteAvatar();
        parent::delete();
    }

    public function setAvatarAttribute($file)
    {
        if ($file) {
            if (!empty($this->attributes['avatar'])) {
                $this->deleteAvatar();
            }

            $filename = rand().date('dmyHis').'.webp';
            $image = Image::make($file)->encode('webp');
            $target = public_path('/uploads/user/avatar/'.$filename);

            $image->resize('200', '200', function ($constraint) {
                $constraint->aspectRatio();
            })->save($target);

            $this->attributes['avatar'] = $filename;
        }
    }

    protected function deleteAvatar()
    {
        if (File::exists($this->avatar_path)) {
            File::delete($this->avatar_path);
        }
    }

    protected function getAvatarPathAttribute()
    {
        if ($this->attributes['avatar'] === 'default.webp') {
            return null;
        }

        return public_path('uploads/user/avatar/'.$this->attributes['avatar']);
    }

    /**
     * Profile model has one user model.
     *
     * @return BelongsTo
     */
    public function owner() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Profile model has one language model.
     *
     * @return HasOne
     */
    public function Language() : HasOne
    {
        return $this->hasOne(Language::class, 'id', 'language_id');
    }

    /**
     * Profile model has one gender model.
     *
     * @return HasOne
     */
    public function Gender() : HasOne
    {
        return $this->hasOne(Gender::class, 'id', 'gender_id');
    }

    /**
     * Profile model has one country model.
     *
     * @return HasOne
     */
    public function Country() : HasOne
    {
        return $this->hasOne(Country::class, 'id', 'country_id');
    }
}
