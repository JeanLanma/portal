<?php

namespace App\Models\Cronos;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CronosTicketSubcategory extends Model
{
    use HasFactory;

    protected $connection = 'mysql_cronos';
    protected $table = 'subcategories_tk';

    public function tickets()
    {
        return $this->hasMany(CronosTicket::class, 'subcategory_id', 'subcategory_id');
    }
}
