<?php
declare(ticks=1);
error_reporting(E_ALL);

// Register signal handler for SIGTERM (what Docker sends on container stop)
pcntl_signal(SIGTERM, function() {
    echo json_encode(["timestamp" => date('c'), "message" => "SIGTERM caught, shutting down"]) . PHP_EOL;
    exit(0);
});

// Also handle SIGINT (Ctrl+C) for manual testing
pcntl_signal(SIGINT, function() {
    echo json_encode(["timestamp" => date('Y-m-d\TH:i:s'), "message" => "SIGINT caught, shutting down"]) . PHP_EOL;
    exit(0);
});

echo json_encode(["timestamp" => date('Y-m-d\TH:i:s'), "message" => "Process started, waiting for signals"]) . PHP_EOL;

while (true) {
    $log = [
        "timestamp" => date('Y-m-d\TH:i:s'),
        "message" => "Heartbeat at " . date('Y-m-d\TH:i:s')
    ];
    fwrite(STDERR, json_encode($log) . PHP_EOL);
    
    sleep(1);
}