<?php

namespace GenDiff;

use Docopt\Handler;

class GenDiff
{
    private const DOC = <<<DOC
Generate diff

Usage:
  gendiff (-h | --help)
  gendiff (-v | --version)

Options:
  -h --help      Show this screen.
  -v --version   Show version.
DOC;
    private const VERSION = 'v1.0.0';

    /**
     * @var Handler
     */
    private $docopt;

    public function __construct()
    {
        $this->docopt = new Handler([
            'help' => true,
            'optionFirst' => false,
        ]);
    }

    public function exec()
    {
        $args = $this->docopt->handle(self::DOC);

        if ($args['--version']) {
            echo self::VERSION . PHP_EOL;
            return;
        }
    }
}
