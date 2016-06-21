<?php

namespace Ddd\Calendar\Model;

interface NamedEventInterface extends EventInterface
{
    /**
     * @return string
     */
    public function getTitle();

    /**
     * @return string
     */
    public function getDescription();
}
