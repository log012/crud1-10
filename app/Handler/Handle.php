<?php 

namespace App\Handler;

use Spatie\WebhookClient\Jobs\ProcessWebhookJob;



class Handle extends ProcessWebhookJob{
    public function handle()
    {
        $payload=json_decode($this->webhookCall,true)['payload'];
        logger('webhooks started');
        logger($payload);
    }
}