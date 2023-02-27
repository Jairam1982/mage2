<?php
namespace Mastering\SampleModule\Plugin;

use Mastering\SampleModule\Console\Command\AddItem;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Logger
{
    /**
     * @var OutputInterface
     */
    private $output;

    public function beforeRun(AddItem $command,InputInterface $input, OutputInterface $output)
    {
        $output->writeln("before execute");
    }

    public function afterRun(AddItem $command)
    {
        $this->output->writeln("after execute");
    }

    public function aroundRun(AddItem $command, \Closure $proceed, InputInterface $input, OutputInterface $output)
    {
        $output->writeln("around execute before call");
        $proceed->call($command, $input, $output);
        $output->writeln("around execute after call");
        $this->output = $output;
    }
}