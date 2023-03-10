<?php

namespace App\Containers\Vendor\Welcome\UI\CLI\Commands;

use App\Ship\Parents\Commands\ConsoleCommand;

class SayWelcomeCommand extends ConsoleCommand
{
    protected $signature = 'mustang:welcome';

    protected $description = 'Just saying welcome from a mustang container.';

    public function handle(): void
    {
        echo "Welcome to Mustang Framework :)\n";
    }
}
