<?php

namespace GenDiff;

use Docopt\Handler;

class GenDiff
{
    private const DOC = <<<DOC
Generate diff

Usage:
  gendiff <a>
  gendiff (-h | --help)
  gendiff (-v | --version)

Options:
  -h --help      Show this screen.
  -v --version   Show version.
DOC;

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
            echo "v1.0.0" . PHP_EOL;
            return;
        }
    }
}
