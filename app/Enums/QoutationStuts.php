<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static Accepted()
 * @method static static Expireed()
 * @method static static Waited()
 */
final class QoutationStuts extends Enum
{
    const Accepted = 0;
    const Expireed = 1;
    const Waited = 2;
}
