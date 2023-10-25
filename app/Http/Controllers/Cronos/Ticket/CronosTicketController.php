<?php

namespace App\Http\Controllers\Cronos\Ticket;

use App\Http\Controllers\Controller;
use App\Models\Cronos\CronosTicket;
use Illuminate\Http\Request;

class CronosTicketController extends Controller
{
    public function index()
    {
        return inertia('CronosTickets/Index', [
            'tickets' => CronosTicket::GetLatestTikets(),
        ]);
    }
}
