<?php

namespace App;
class PushNotification implements NotificationInterface
{
     public function sendNotification(string $push): bool
     {
         echo "push notification";
         return false;
     }
}