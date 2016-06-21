<?php

namespace Ddd\Calendar\Service;

interface EventProviderInterface
{
    /**
     * @return array
     */
    public function getEvents();

    /**
     * @return string
     */
    public function getName();
}
