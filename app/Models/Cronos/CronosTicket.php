<?php

namespace App\Models\Cronos;

use App\Models\Ticket\TicketCategory;
use App\Models\Ticket\TicketSubcategory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CronosTicket extends Model
{
    use HasFactory;

    protected $connection = 'mysql_cronos';
    protected $table = 'tickets';

    protected $append = [
        'user',
        'customer',
        'category',
        'subcategory',
    ];

    protected $appends = [
        'created_at_string'
    ];

    protected $fillable = [
        'customer_id',
        'technician_id',
        'category_id',
        'subcategory_id',
        'request_of',
        'end_user',
        'msj_customer',
        'status'
    ];

    /** Relationships */

    public function user()
    {
        return $this->belongsTo(CronosUser::class, 'technician_id', 'user_id', 'user_id');
    }

    public function customer()
    {
        return $this->belongsTo(CronosTicketCustomer::class, 'customer_id', 'customer_id', 'customer_id');
    }

    public function category()
    {
        return $this->belongsTo(CronosTicketCategory::class, 'category_id', 'category_id', 'category_id');
    }
    public function subcategory()
    {
        return $this->belongsTo(CronosTicketSubcategory::class, 'subcategory_id', 'subcategory_id', 'subcategory_id');
    }

    /** Methods */
    public static function GetLatestTikets()
    {
        return self::with('customer', 'user', 'category', 'subcategory')->orderBy('created_at', 'desc')->take(15)->get();
    }

    /** Mutators */

    /**
     * Format the created_at attribute like "Lunes, 25 de Enero de 2021"
     */
    public function getCreatedAtStringAttribute()
    {
        return $this->created_at->locale('es')->isoFormat('dddd, DD [de] MMMM [de] YYYY');
    }
}
