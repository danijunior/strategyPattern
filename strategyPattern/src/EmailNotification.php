<?php

namespace App;
class EmailNotification implements NotificationInterface
{
    public function sendNotification(string $email): bool
    {
        echo "email notification";
        return false;
    }
}