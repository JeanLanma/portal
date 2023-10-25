<?php

namespace App\Models\Cronos;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CronosTicketCustomer extends Model
{
    use HasFactory;

    protected $connection = 'mysql_cronos';
    protected $table = 'customers';

    protected $append = [
        'tickets'
    ];

    protected $fillable = [
        'name',
    ];

    public function tickets()
    {
        return $this->hasMany(CronosTicket::class, 'ticket_id', 'ticket_id');
    }
}
