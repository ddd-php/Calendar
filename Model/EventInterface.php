<?php

namespace Ddd\Calendar\Model;

interface EventInterface
{
    /**
     * @return \Ddd\Time\Model\TimeInterval
     */
    public function getInterval();

    /**
     * @param EventInterface $event
     *
     * @return bool
     */
    public function isEquals(EventInterface $event);
}
