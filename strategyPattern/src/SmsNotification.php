<?php

namespace App;
class SmsNotification implements NotificationInterface
{
    public function sendNotification(string $phoneNumber): bool
    {
        echo "sms notification";
        return false;
    }
}