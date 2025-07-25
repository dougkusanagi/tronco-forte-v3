<?php

declare(strict_types=1);

namespace flight\commands;

class ServeCommand extends AbstractBaseCommand
{
    /**
     * Construct
     *
     * @param array<string,mixed> $config JSON config from .runway-config.json
     */
    public function __construct(array $config)
    {
        parent::__construct('serve', 'Start the PHP development server', $config);
        $this->option('-p|--port', 'Port to run the server on', 8000);
        $this->option('-h|--host', 'Host to run the server on', 'localhost');
    }

    /**
     * Executes the function
     *
     * @return void
     */
    public function execute()
    {
        $io = $this->app()->io();
        
        $port = $this->option('port');
        $host = $this->option('host');
        
        $io->info("Starting PHP development server on {$host}:{$port}...");
        $io->info("Document root: public/");
        $io->info("Press Ctrl+C to stop the server");
        
        // Change to project root directory
        $projectRoot = dirname(__DIR__, 2);
        chdir($projectRoot);
        
        // Start the PHP server
        $command = "php -S {$host}:{$port} -t public";
        passthru($command);
    }
}