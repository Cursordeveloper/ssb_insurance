<?php

declare(strict_types=1);

namespace App\Console\Commands;

use App\Services\RabbitMQ\RabbitMQService;
use Illuminate\Console\Command;

final class MessageConsumer extends Command
{
    protected $signature = 'app:message-consumer';

    public function handle(): void
    {
        $rabbitMQService = new RabbitMQService;
        $rabbitMQService->consume(exchange: 'ssb_direct', type: 'direct', queue: 'insurance', routingKey: 'ssb_ins', callback: function ($message) {
        });
    }
}
