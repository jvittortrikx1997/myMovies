<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Str;

class MakeInterfaceCommand extends Command
{

    protected $signature = 'make:interface {name}';
    protected $description = 'Create a new interface';

    public function handle()
    {
        $name = $this->argument('name');
        $interfacename = Str::studly($name);

        $interfacePath = app_path("Contracts/{$interfaceName}.php");

        if(file_exists($interfacePath)){
            $this->error('Interface already exists!');
            return;
        }

        $stub = $this->generateInterfaceStub($interfaceName);
        file_put_contents($interfacePath, $stub);

        $this->info("Interface created successfully: {$interfacePath}");
    }

    protected function generateInterface($interfaceName)
    {
        return <<<STUB
        <?php

        namespace App\Contracts;

        interface {$interfaceName}
        {
            //
        }
        STUB;
    }
}
