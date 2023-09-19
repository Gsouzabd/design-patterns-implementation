<?php


namespace Inc\Classes\StatusDetails\Messages;

use Inc\Classes\StatusDetails\StatusHistory;

class NoMessageInfo extends MessageDetail{

    public function __construct()
    {
        parent::__construct(null);
    }

    public function message(StatusHistory $StatusHistory): string
    {
        return "Nenhuma informação fornecida";
    }
}