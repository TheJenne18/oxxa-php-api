<?php
/**
 * Created by PhpStorm.
 * User: jens
 * Date: 28/01/19
 * Time: 20:09
 */

namespace App\Commands;


use App\NsGroup;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CreateNameserverCommand extends Command
{
    // the name of the command (the part after "bin/console")
    protected static $defaultName = 'nameservers:create';

    protected function configure()
    {
        // ...
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $nsGroup = new NsGroup();

        //$nsGroup->add('test', 'ns1.zodi-innovations.be', 'ns2.zodi-innovations.be');
        $nsGroup->delete('HENQ86354');
    }
}