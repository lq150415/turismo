<?php

namespace Turismo;

use Illuminate\Database\Eloquent\Model;

class Cultural extends Model
{
    protected $table = 'culturales';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['NOM_CUL','DES_CUL', 'FOT_CUL', 'LAT_CUL','LON_CUL','PRE_CUL','FEC_CUL','HOR_CUL'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['id'];
}
