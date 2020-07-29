<?php

namespace AmitKD\LaravelMetatag;

use AmitKD\LaravelMetatag\Models\Meta;

trait Metaable
{
    /**
     * Adds/Updates Meta To A Model
     *
     * @param array $meta
     * @return mixed
     */
    public function addOrUpdateMeta(array $meta)
    {
        if ($this->meta()->count()) {
            $meta = $this
                ->meta()
                ->update([
                    'title' => $meta['title'],
                ]);
            foreach ($meta['tags'] as $name => $content) {
                $meta->tags()->create([
                    $name => $content
                ]);
            }
            return $meta;
        }
        return $this
            ->meta()
            ->create($meta);
    }

    /**
     * Gets the model's meta.
     */
    public function meta()
    {
        return $this
            ->morphOne(Meta::class, 'metaable');
    }

    /**
     * Deletes meta for A Model
     *
     * @return mixed
     */
    public function removeMeta()
    {
        if ($this->meta()->count()) {
            return $this
                ->meta()
                ->delete();

        }
        return null;
    }
}
