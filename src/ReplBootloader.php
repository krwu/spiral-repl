<?php

/**
 * @Author Kairee Wu
 */

declare(strict_types=1);

namespace Krwu\Repl;

use Spiral\Boot\Bootloader\Bootloader;
use Spiral\Bootloader\ConsoleBootloader;

class ReplBootloader extends Bootloader
{
 
    const DEPENDENCIES = [
        ConsoleBootloader::class
    ];

    public function boot(ConsoleBootloader $console): void
    {
        $console->addCommand(Command\ReplCommand::class);
    }
}
