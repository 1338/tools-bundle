<?php

namespace Cornerstones\ToolsBundle\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class TestCommand extends Command
{
    // the name of the command (the part after "bin/console")
    protected static $defaultName = 'csm:test';

    protected function configure()
    {
        $this->setName('csm:test')
          ->setDescription('Testing');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('Hi Dad!');
    }
}
