<?php

namespace App;
interface NotificationInterface
{
    public function sendNotification(string $var): bool;
}