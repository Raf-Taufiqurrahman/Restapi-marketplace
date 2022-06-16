<?php

namespace App\Traits;

trait Scope{
    public function scopeSearch($query, $type)
    {
        return $query->when(request()->q, function($search) use($type){
            $search = $search->where($type, 'like', '%'. request()->q .'%');
        });
    }
}
