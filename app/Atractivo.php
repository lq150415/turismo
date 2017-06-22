<?php

namespace Turismo;

use Illuminate\Database\Eloquent\Model;

class Atractivo extends Model
{
     protected $table = 'atractivos';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['NOM_ATR','DES_ATR', 'FOT_ATR', 'LAT_ATR','LON_ATR'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['id'];
}
