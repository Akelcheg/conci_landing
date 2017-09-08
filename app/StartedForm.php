<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StartedForm extends Model
{
    protected $table = 'started_form';
    protected $fillable = ['full_name', 'phone_number','email'];
}
