<?php

/**
 * @Author Kairee Wu
 */

declare(strict_types=1);

namespace Krwu\Repl;

use Spiral\Boot\Bootloader\Bootloader;
use Spiral\Bootloader\TokenizerBootloader;

class ReplBootloader extends Bootloader
{
    public function boot(TokenizerBootloader $tokenizer): void
    {
        $tokenizer->addDirectory(directory('vendor') . 'krwu/spiral-repl/src/Command');
    }
}
