<?php

namespace App\Models\Cronos;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CronosTicketCategory extends Model
{
    use HasFactory;

    protected $connection = 'mysql_cronos';
    protected $table = 'categories_tk';

    protected $append = [
        'tickets'
    ];

    protected $fillable = [
        'name',
    ];

    public function tickets()
    {
        return $this->hasMany(CronosTicket::class);
    }
}
