<?php

namespace App\Models\Cronos;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CronosTicketActivity extends Model
{
    use HasFactory;

    protected $connection = 'mysql_cronos';
    protected $table = 'activities_tk';

    protected $fillable = [
        'ticket_id',
        'user_id',
        'activity',
        'status'
    ];

    public function ticket()
    {
        return $this->belongsTo(CronosTicket::class, 'ticket_id', 'ticket_id');
    }
}
