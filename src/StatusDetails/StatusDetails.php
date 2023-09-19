<?php

namespace Inc\Classes\StatusDetails;

use Inc\Classes\StatusDetails\Messages\DueDiligence;
use Inc\Classes\StatusDetails\Messages\FallbackErrors;
use Inc\Classes\StatusDetails\Messages\NoMessageInfo;
use Inc\Classes\StatusDetails\Messages\InternalProblems;
use Inc\Classes\StatusDetails\Messages\IncorrectInfoCard;
use Inc\Classes\StatusDetails\Messages\GeneralProblemsCard;

class StatusDetails{

    public function getMessage(StatusHistory $StatusHistory) : string
    {
        $chainOfMessages = new IncorrectInfoCard(
            new GeneralProblemsCard(
                new InternalProblems(
                    new DueDiligence(
                        new FallbackErrors(
                            new DueDiligence(
                                new NoMessageInfo()
                            )
                        )
                    )
                )
            )
        );

        return $chainOfMessages->message($StatusHistory);
    }
    
}