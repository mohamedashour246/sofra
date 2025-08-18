<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $table = 'payments';

    protected $fillable = ['restaurant_id','price'];

    public function restaurant()
    {
        return $this->belongsTo('App\Models\Restaurant');
    }
}
