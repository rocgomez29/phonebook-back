<?php

namespace App\Models;

use App\Models\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contact extends Model
{
	use SoftDeletes;

    protected $table = 'contacts';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'mobile_phone',
        'home_phone',
        'work_phone',
        'email'
    ];

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = strtoupper(trim($value));
    }

    public function setMobilePhoneAttribute($value)
    {
        $this->attributes['mobile_phone'] = trim($value);
    }

    public function setHomePhoneAttribute($value)
    {
        $this->attributes['home_phone'] = trim($value);
    }

    public function setWorkPhoneAttribute($value)
    {
        $this->attributes['work_phone'] = trim($value);
    }

    public function setEmailAttribute($value)
    {
        $this->attributes['email'] = strtoupper(trim($value));
    }
}
