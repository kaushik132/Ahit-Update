<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChooseUsFaq extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'choose_us_faq';
    protected $fillable = ['question','answer'];
}
