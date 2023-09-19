<?php

namespace Inc\Classes\StatusDetails\Messages;

use Inc\Classes\StatusDetails\StatusHistory;

abstract class MessageDetail{
    
    protected ?MessageDetail $nextMessageDetails;

    public function __construct(?MessageDetail $nextMessageDetails)
    {
        $this->nextMessageDetails = $nextMessageDetails;
    }

    abstract public function message(StatusHistory $StatusHistory): string;
}