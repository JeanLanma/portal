<?php

namespace App\Models\Cronos;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CronosUser extends Model
{
    use HasFactory;

    protected $connection = 'mysql_cronos';
    protected $table = 'users';

    public function tickets()
    {
        return $this->hasMany(CronosTicket::class, 'technician_id', 'user_id');
    }
}
