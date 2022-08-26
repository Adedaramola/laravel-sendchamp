<?php

declare(strict_types=1);

namespace Adedaramola\Sendchamp\Enums;

enum UseCase: string
{
    case TRANSACTIONAL = 'Transactional';
    case MARKETING = 'Marketing';
    case BOTH = 'Transactional & Marketing';
}
