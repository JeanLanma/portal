<?php
namespace App\Repositories\CronosTickets;

use App\Models\Cronos\CronosTicket;

class GetCronosTicketFiltered {

    private $filters;
    private $query;
    private $limit;
    private $page;
    private $order_by;
    private $order;

    public function __construct($Filters)
    {
        $this->filters = $Filters;
        
        $this->query = new CronosTicket();
    } 
    
}