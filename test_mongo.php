<?php

use Illuminate\Contracts\Console\Kernel;
use App\Models\User;

require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$app->make(Kernel::class)->bootstrap();

try {
    $count = User::count();
    echo "Successfully connected to MongoDB! Current user count: $count\n";
} catch (\Exception $e) {
    echo "Connection failed: " . $e->getMessage() . "\n";
}
