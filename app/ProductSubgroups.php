<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductSubgroups extends Model
{
    protected $table = 'product_subgroup';

    protected $fillable = [
        'product_group_id',
        'title',
        'slug',
        'sort_order',
        'status'
    ];

    public function relGroup(){
        return $this->belongsTo('App\ProductGroup', 'product_group_id', 'id');
    }
}
