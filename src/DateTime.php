<?php

namespace Bangpound;

class DateTime extends \DateTime
{
    public function __toString()
    {
        return $this->format('U');
    }
}
