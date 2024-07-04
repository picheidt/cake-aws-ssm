<?php

namespace Picheidt\CakeAwsSsm\Console;

use Cake\Command\Command;
use Cake\Console\Arguments;
use Cake\Console\ConsoleIo;
use Cake\Console\ConsoleOptionParser;

class EnvPullCommand extends Command
{

    public static function defaultName()
    {
        return 'env:pull';
    }


    protected function buildOptionParser(ConsoleOptionParser $parser)
    {
        $parser->addOption('paths to envs', [
            'help' => 'The paths to envs to pull from split by comma, example: "generic/test, appName/test"',
            'required' => true
        ]);

        $parser->addOption('region', [
            'help' => 'The region to pull from (us-east-1, us-west-2, [...])',
            'required' => true
        ]);

        $parser->addOption('accessKeyId', [
            'help' => 'The access key id to pull from',
            'required' => true
        ]);

        $parser->addOption('secretAccessKey', [
            'help' => 'The secret access key to pull from',
            'required' => true
        ]);

        return $parser;
    }

    public function execute(Arguments $args, ConsoleIo $io)
    {
        $io->out('Pulling envs from SSM: ' . $args->getOption('paths') . ' to region: ' . $args->getOption('region') . ' with accessKeyId: ' . $args->getOption('accessKeyId') . ' and secretAccessKey: ' . $args->getOption('secretAccessKey'));
    }
}