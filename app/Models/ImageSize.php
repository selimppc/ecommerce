<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Http\Requests;
use Illuminate\Http\Request;
class ImageSize extends Model
{

    protected $table = 'image_size';

    protected $fillable = [
        'title',
        'value',
        'width_cm',
        'height_cm',
        'width_inch',
        'height_inch',
        'status',
        'sort_order'
    ];
   
}