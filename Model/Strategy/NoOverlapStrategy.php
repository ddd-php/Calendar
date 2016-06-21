<?php

namespace Ddd\Calendar\Model\Strategy;

use Ddd\Calendar\Exception\CalendarEventException;
use Ddd\Calendar\Model\EventInterface;

/**
 * Overlap strategy which permits introducing a new event event if existing event is present
 * in the same interval of time.
 *
 * @author Joseph Rouff <rouffj@gmail.com>
 */
class NoOverlapStrategy extends BaseStrategy
{
    /**
     * {@inheritdoc}
     */
    public function add(EventInterface $newEvent, array $events)
    {
        foreach ($events as $event) {
            if ($newEvent->getInterval()->isDuring($event->getInterval())) {
                throw CalendarEventException::eventOverlap($newEvent);
            }
        }

        return parent::add($newEvent, $events);
    }
}
