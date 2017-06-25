<?php

namespace App\Jobs;

use Illuminate\Queue\Jobs\Job;

class PurchasePodcast extends Job
{
    public function handle()
    {
        $this->preparePurchase()
             ->sendEmail();
    }

    private function preparePurchase()
    {
        var_dump("Preparing the purchase.");

        return $this;
    }

    private function sendEmail()
    {
        var_dump("Send an email with their invoice.");

        return $this;
    }
}
