<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Cf
 * @package App\Models
 * @version July 7, 2018, 9:19 pm UTC
 */
class Cf extends Model
{
    use SoftDeletes;

    public $table = 'cfs';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'id_penyakit',
        'id_gejala',
        'cf'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_penyakit' => 'integer',
        'id_gejala' => 'integer',
        'cf' => 'double'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id_penyakit' => 'required',
        'id_gejala' => 'required',
        'cf' => 'required'
    ];

    
}
