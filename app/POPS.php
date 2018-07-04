<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class POPS extends Model
{
    //

    use SoftDeletes;

    protected $table = 'pops';

    protected $primaryKey = 'id';

    protected $fillable = [
        'name_en',
        'name_jp',
        'artist_en',
        'artist_jp',
        'image_url',
        'version',
        'bpm',
        'level_easy',
        'level_basic',
        'level_advanced',
        'level_expert',
        'level_master',
        'level_remaster',
        'listen_youtube',
        'listen_niconico',
        'regionlocked'
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $dates = ['deleted_at'];
}
