<?php

namespace Yaro\Jarboe;


class Tag extends \Eloquent
{
    
    protected $table = 'j_tags';

    
    public function images()
    {
        $model = \Config::get('jarboe::images.models.image');
        
        return $this->belongsToMany($model, 'j_images2tags', 'id_tag', 'id_image');
    } // end images
    
    public function galleries()
    {
        $model = \Config::get('jarboe::images.models.gallery');
        
        return $this->belongsToMany($model, 'j_galleries2tags', 'id_tag', 'id_gallery');
    } // end galleries
    
}