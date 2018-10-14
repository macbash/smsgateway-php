<?php

//Author : Mohammed Azfar
//Email  : m_az@live.in
//Dated  : 2018-10-14

require 'vendor/autoload.php';

use SMSGatewayMe\Client\ApiClient;
use SMSGatewayMe\Client\Configuration;
use SMSGatewayMe\Client\Api\MessageApi;
use SMSGatewayMe\Client\Model\SendMessageRequest;

// Configure client
$config = Configuration::getDefaultConfiguration();


$config->setApiKey('Authorization', getenv("API_KEY"));

$apiClient = new ApiClient($config);

$messageClient = new MessageApi($apiClient);

// Sending a SMS Message
$sendMessageRequest1 = new SendMessageRequest([
    'phoneNumber' => getenv("TO_NUM"),
    'message' => 'test1',
    'deviceId' =>  getenv("FROM_DEVICEID")
]);
$sendMessageRequest2 = new SendMessageRequest([
    'phoneNumber' => getenv("TO_NUM"),
    'message' => 'test2',
    'deviceId' => getenv("FROM_DEVICEID")
]);
$sendMessages = $messageClient->sendMessages([
    $sendMessageRequest1,
    $sendMessageRequest2
]);
print_r($sendMessages);
