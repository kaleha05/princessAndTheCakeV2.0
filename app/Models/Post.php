<?php

namespace App\Models;

use Orchid\Attachment\Attachable;
use Orchid\Attachment\Models\Attachment;
use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\AsSource;

class Post extends Model
{
    use AsSource, Attachable;

    /**
     * @var array
     */
    protected $fillable = [
        'title',
        'image',
        'description',
        'body',
        'author'
    ];

}
