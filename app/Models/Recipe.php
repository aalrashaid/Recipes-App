<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class Recipe extends Model
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
        'category_id',
        'cuisine_id',
        'thumbnail_id',
        'title',
        'slug',
        'description',
        'youtube_video',
        'recipe_method',
        'difficulty',
        'prep_time',
        'cook_time',
        'total',
        'servings',
        'yield',
        'ingredients',
        'directions',
        'nutrition_facts'
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

    public function delete()
    {
        $this->deleteThumbnail();
        parent::delete();
    }

    public function setThumbnailIdAttribute($file)
    {
        if ($file) {
            if (!empty($this->attributes['thumbnail_id'])) {
                $this->deleteThumbnail();
            }

            $filename = rand().date('dmyHis').'.webp';
            $image = Image::make($file)->encode('webp');
            $target = public_path('/uploads/thumbnail/'.$filename);

            $image->resize('400', '400', function ($constraint) {
                $constraint->aspectRatio();
            })->save($target);

            if (empty($this->attributes['thumbnail_id'])) {
                $thumbnail = Thumbnail::create([
                    'user_id' => auth()->user()->id,
                    'name' => $filename,
                    'size' => $image->filesize(),
                    'path' => '/uploads/thumbnail/'
                ]);
            } else {
                $thumbnail = Thumbnail::where('id', $this->attributes['thumbnail_id'])->first();
                $thumbnail->name = $filename;
                $thumbnail->size = $image->filesize();
                $thumbnail->save();
            }

            $this->attributes['thumbnail_id'] = $thumbnail->id;
        }
    }

    protected function deleteThumbnail()
    {
        if (File::exists($this->thumbnail_path)) {
            File::delete($this->thumbnail_path);
        }
    }

    protected function getThumbnailPathAttribute(): ?string
    {
        if (empty($this->attributes['thumbnail_id'])) {
            return null;
        }

        $thumbnail = Thumbnail::where('id', $this->attributes['thumbnail_id'])->first();

        return public_path('/uploads/thumbnail/'.$thumbnail->name);
    }

    /**
     * Recipe model has one user model.
     *
     * @return BelongsTo
     */
    public function owner(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Recipe model has one thumbnail model.
     *
     * @return HasOne
     */
    public function thumbnail() : HasOne
    {
        return $this->hasOne(Thumbnail::class, 'id', 'thumbnail_id');
    }

    /**
     * Recipe model has one cuisine model.
     *
     * @return HasOne
     */
    public function cuisine(): HasOne
    {
        return $this->hasOne(Cuisine::class, 'id', 'cuisine_id');
    }

    /**
     * Recipe model has one category model.
     *
     * @return HasOne
     */
    public function category(): HasOne
    {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }
}
