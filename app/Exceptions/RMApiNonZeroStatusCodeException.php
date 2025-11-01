<?php

namespace App\Exceptions;

use Exception;

class RMApiNonZeroStatusCodeException extends Exception
{
    private string $command;
    private int $exitCode;
    private array $output;

    public function __construct(
        string $command,
        int $exitCode,
        array $output = [],
        string $message = null
    ) {
        $message = $message ?? "RMApi command failed: $command (exit code: $exitCode)";
        parent::__construct($message);
        
        $this->command = $command;
        $this->exitCode = $exitCode;
        $this->output = $output;
    }
    
    public function getCommand(): string
    {
        return $this->command;
    }
    
    public function getExitCode(): int
    {
        return $this->exitCode;
    }
    
    public function getOutput(): array
    {
        return $this->output;
    }
}
