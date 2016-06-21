<?php

namespace Ddd\Calendar\Service;

use Ddd\Time\Model\TimeInterval;

interface CalendarLoaderInterface
{
    /**
     * @return \Ddd\Calendar\Model\CalendarInterface
     */
    public function load();

    /**
     * @param TimeInterval|null $interval
     *
     * @return \Ddd\Calendar\Model\CalendarInterface
     */
    public function loadInterval(TimeInterval $interval);
}
