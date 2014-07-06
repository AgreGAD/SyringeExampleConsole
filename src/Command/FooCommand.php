<?php

namespace Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class FooCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('demo:foo')
            ->setDescription('Foo command')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln($this->getDescription());

        $output->writeln('Done');
    }
}
