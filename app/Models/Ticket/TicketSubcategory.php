<?php

namespace App\Models\Ticket;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TicketSubcategory extends Model
{
    use HasFactory;

    protected $connection = 'mysql_cronos';

    public function tickets()
    {
        return $this->hasMany(Ticket::class, 'subcategory_id', 'subcategory_id');
    }
}
