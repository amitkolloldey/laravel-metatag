<?php

namespace AmitKD\LaravelMetatag\Models;

use Illuminate\Database\Eloquent\Model;

class MetaTag extends Model{

    protected $table = "meta_tags";

    protected $fillable =  [
        'name',
        'content',
        'meta_id'
    ];

    /**
     * Gets The Meta
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function meta()
    {
        return $this
            ->belongsTo(Meta::class);
    }

}
