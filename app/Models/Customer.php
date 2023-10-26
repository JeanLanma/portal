<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Ticket\Ticket;
use App\Models\CustomerMetadata;

class Customer extends Model
{
    use HasFactory;

    protected $append = [
        'metadata'
    ];

    protected $fillable = [
        'name',
        'trade_name',
        'slug',
        'rfc',
        'email',
        'phone',
        'address',
        'status',

    ];

    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }

    public function metadata()
    {
        return $this->hasOne(CustomerMetadata::class);
    }
}
