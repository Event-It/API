<?php

namespace App\Http\Resources\Tickets;

use Illuminate\Http\Resources\Json\JsonResource;

class TicketDescriptionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
          'ticket_desc_id' => $this->id,
          'ticket_type' => $this->ticket_type,
          'ticket_price' => $this->ticket_price,
          'available_tickets' => $this->available_tickets,
          'sold_tickets' => $this->sold_tickets,
          'ticketdescriptionable_id' => $this->ticketdescriptionable_id,
          'ticketdescriptionable_type' => $this->ticketdescriptionable_type          
        ];
    }
}
