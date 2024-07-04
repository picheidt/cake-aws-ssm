<?php

namespace Picheidt\CakeAwsSsm\Commands;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class PullEnvCommand extends Command
{
    protected static $defaultName = 'env:pull';

    protected function configure()
    {
        $this
            ->setDescription('Meu comando de exemplo')
            ->addOption('name', null, InputOption::VALUE_REQUIRED, 'O nome do usuário');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $name = $input->getOption('name');
        $output->writeln('Olá, ' . $name . '!');
        return Command::SUCCESS;
    }
}