<?php

/*
 * This file is part of the Cilex framework.
 *
 * (c) Mike van Riel <mike.vanriel@naenius.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace OpenWines\Command;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use OpenWines\Provider\Console\Command;

/**
 * Example command for testing purposes.
 */
class InfoCommand extends Command
{
    /**
     * {@inheritDoc}
     */
    protected function configure()
    {
        $this
            ->setName('info')
            ->setDescription('Get Application Information');
    }

    /**
     * {@inheritDoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        // This is a contrived example to show accessing services
        // from the container without needing the command itself
        // to extend from anything but Symfony Console's base Command.

        $app = $this->getApplication()->getService('console');

        $output->writeln('Name: ' . $app->getName());
        $output->writeln('Version: ' . $app->getVersion());
    }
}