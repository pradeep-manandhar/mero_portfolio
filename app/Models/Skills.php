<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skills extends Model
{
    public const levels=['beginner','intermediate','expert'];
    public const categories=['programming','cloud computing','cybersecurity','networking','hardware','machine learning/AI','data mining','database management'];

    //
    protected $fillable=[
        'skill_name',
        'skill_category',
        'skill_level'
    ];
}
