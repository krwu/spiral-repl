<?php
/**
 * {project-name}
 * 
 * @author {author-name}
 */
declare(strict_types=1);

namespace Krwu\Repl\Command;

use Psy\Configuration;
use Psy\Shell;
use Spiral\Console\Command;

class ReplCommand extends Command
{
    protected const NAME = 'repl';

    protected const DESCRIPTION = '';

    protected const ARGUMENTS = [];

    protected const OPTIONS = [];

    /**
     * Perform command
     */
    protected function perform(): void
    {
        $shell = new Shell(new Configuration(['updateCheck' => 'never']));
        
        $shell->run();
    }
}
