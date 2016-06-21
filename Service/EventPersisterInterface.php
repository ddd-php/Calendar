<?php

namespace Ddd\Calendar\Service;

use Ddd\Calendar\Model\EventInterface;

interface EventPersisterInterface
{
    /**
     * @param EventInterface $event
     */
    public function addEvent(EventInterface $event);

    /**
     * @param EventInterface $event
     */
    public function removeEvent(EventInterface $event);
}
