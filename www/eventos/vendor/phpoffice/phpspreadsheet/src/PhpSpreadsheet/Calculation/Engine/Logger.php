<?php

namespace PhpOffice\PhpSpreadsheet\Calculation\Engine;

class Logger
{
    /**
     * Flag to determine whether a debug log should be generated by the calculation engine
     *        If true, then a debug log will be generated
     *        If false, then a debug log will not be generated.
     */
    private bool $writeDebugLog = false;

    /**
     * Flag to determine whether a debug log should be echoed by the calculation engine
     *        If true, then a debug log will be echoed
     *        If false, then a debug log will not be echoed
     * A debug log can only be echoed if it is generated.
     */
    private bool $echoDebugLog = false;

    /**
     * The debug log generated by the calculation engine.
     *
     * @var string[]
     */
    private array $debugLog = [];

    /**
     * The calculation engine cell reference stack.
     */
    private CyclicReferenceStack $cellStack;

    /**
     * Instantiate a Calculation engine logger.
     */
    public function __construct(CyclicReferenceStack $stack)
    {
        $this->cellStack = $stack;
    }

    /**
     * Enable/Disable Calculation engine logging.
     */
    public function setWriteDebugLog(bool $writeDebugLog): void
    {
        $this->writeDebugLog = $writeDebugLog;
    }

    /**
     * Return whether calculation engine logging is enabled or disabled.
     */
    public function getWriteDebugLog(): bool
    {
        return $this->writeDebugLog;
    }

    /**
     * Enable/Disable echoing of debug log information.
     */
    public function setEchoDebugLog(bool $echoDebugLog): void
    {
        $this->echoDebugLog = $echoDebugLog;
    }

    /**
     * Return whether echoing of debug log information is enabled or disabled.
     */
    public function getEchoDebugLog(): bool
    {
        return $this->echoDebugLog;
    }

    /**
     * Write an entry to the calculation engine debug log.
     */
    public function writeDebugLog(string $message, mixed ...$args): void
    {
        //    Only write the debug log if logging is enabled
        if ($this->writeDebugLog) {
            $message = sprintf($message, ...$args);
            $cellReference = implode(' -> ', $this->cellStack->showStack());
            if ($this->echoDebugLog) {
                echo $cellReference,
                ($this->cellStack->count() > 0 ? ' => ' : ''),
                $message,
                PHP_EOL;
            }
            $this->debugLog[] = $cellReference
                . ($this->cellStack->count() > 0 ? ' => ' : '')
                . $message;
        }
    }

    /**
     * Write a series of entries to the calculation engine debug log.
     *
     * @param string[] $args
     */
    public function mergeDebugLog(array $args): void
    {
        if ($this->writeDebugLog) {
            foreach ($args as $entry) {
                $this->writeDebugLog($entry);
            }
        }
    }

    /**
     * Clear the calculation engine debug log.
     */
    public function clearLog(): void
    {
        $this->debugLog = [];
    }

    /**
     * Return the calculation engine debug log.
     *
     * @return string[]
     */
    public function getLog(): array
    {
        return $this->debugLog;
    }
}