<?php
    interface Logger{
        public function log ($message);
    }
    class FileLogger implements Logger{
        private $handle;
        private $logFile;
        public function __construct($filename, $mode = 'a')
        {
            $this->logFile = $filename;
            $this->handle = fopen($filename, $mode)
            or die('Could not opem the log file');
        }
        public function log($message)
        {
            $message = date('F j, Y, g:i a') . ': ' . $message . "\n";
            fwrite($this->handle, $message);
        }
        public function __destruct()
        {
            if($this->handle){
                fclose($this->handle);
            }
        }
    }
    class DatabaseLogger implements Logger
    {
        public function log($message)
        {
            echo sprintf("Log %s to the database\n", $message);
        }
    }
    // examle1
    $logger = new FileLogger('./log.txt', 'w');
    $logger -> log('PHP Interface is awesome');

    //examle2
    $logger = [
        new FileLogger('./log.txt'),
        new DatabaseLogger()
    ];

    foreach ($logger as $logger){
        $logger->log('Log message');
    }
?>