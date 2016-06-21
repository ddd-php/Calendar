<?php

namespace Ddd\Calendar\Model;

interface SendableEventInterface extends EventInterface
{
    /**
     * @return string
     */
    public function getOrganizer();

    /**
     * @return array
     */
    public function getGuests();
}
