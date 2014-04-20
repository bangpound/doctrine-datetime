<?php

namespace Bangpound\Doctrine\DBAL\Types;

use Doctrine\DBAL\Types\DateTimeType as BaseType;
use Doctrine\DBAL\Platforms\AbstractPlatform;
use Bangpound\DateTime;

class DateTimeType extends BaseType
{
    /**
     * {@inheritDoc}
     */
    public function convertToPHPValue($value, AbstractPlatform $platform)
    {
        $dateTime = parent::convertToPHPValue($value, $platform);

        if (!$dateTime) {
            return $dateTime;
        }

        return new DateTime('@' . $dateTime->format('U'));
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {
        return 'bangpound_datetime';
    }
}
