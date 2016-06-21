<?php

namespace Ddd\Calendar\Service;

use Ddd\Calendar\Model\CalendarInterface;

interface CalendarPersisterInterface
{
    /**
     * @param CalendarInterface $calendar
     */
    public function persist(CalendarInterface $calendar);
}
