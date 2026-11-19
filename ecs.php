<?php

declare(strict_types=1);

use CodelyTv\CodingStyle;
use Symplify\EasyCodingStandard\Config\ECSConfig;
use Symplify\EasyCodingStandard\ValueObject\Option;

return function (ECSConfig $ecsConfig): void {
    $ecsConfig->paths([__DIR__ . '/src', __DIR__ . '/tests']);
    $ecsConfig->sets([CodingStyle::DEFAULT]);
    $ecsConfig->indentation(Option::INDENTATION_SPACES);
};