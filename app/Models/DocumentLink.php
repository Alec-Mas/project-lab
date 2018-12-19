<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DocumentLink extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'document_name', 'document_link', 'post_id'
    ];
}
