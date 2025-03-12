<?php

use App\EmailNotification;
use App\PushNotification;
use App\SmsNotification;

require('vendor/autoload.php');

$notif = "sms";

$userEmail = "test@test.com";
$push = "myPush";
$phoneNumber = "06 11 22 33 44";

$strategy = match ($notif) {
         'email' => (new EmailNotification())->sendNotification($userEmail),
         'push' => (new PushNotification())->sendNotification($push),
         'sms' => (new SmsNotification())->sendNotification($phoneNumber),
         default => throw new \InvalidArgumentException()
    };