<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{

    protected $table = 'Properties';
    public $timestamps = true;
    protected $fillable = array('UUID', 'property_code', 'property_status', 'price', 'description', 'property_size', 'address', 'country', 'city', 'Additional_fees', 'latitude', 'status', 'featured', 'user_id');

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
