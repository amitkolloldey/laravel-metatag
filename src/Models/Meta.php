<?php

namespace AmitKD\LaravelMetatag\Models;

use Illuminate\Database\Eloquent\Model;

class Meta extends Model
{
    protected $table = "metas";

    protected $fillable = [
        'title',
        'keywords',
        'description',
        'metaable_id',
        'metaable_type'
    ];

    /**
     * Gets All The Meta Tags
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tags()
    {
        return $this
            ->hasMany(MetaTag::class);
    }
}
