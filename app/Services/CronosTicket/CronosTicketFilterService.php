<?php

namespace App\Services\CronosTicket;

class CronosTicketServices
{

    public static function GetTicketFilters()
    {
        return [
            'page' => 1,
            'limit' => 15,
            'status' => 'all',
            'order_by' => 'created_at',
            'order' => 'desc',
        ];
    }
}