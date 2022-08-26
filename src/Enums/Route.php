<?php

declare(strict_types=1);

namespace Adedaramola\Sendchamp\Enums;

enum Route: string
{
    case DND = 'dnd';
    case NO_DND = 'no_dnd';
    case INTERNATIONAL = 'international';
}
