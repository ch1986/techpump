<?php

namespace App\Client;

use GuzzleHttp\Client;

/**
 * Description of CumlouderAPIClient
 *
 * @author ccaete
 */
class CumlouderAPIClient extends Client
{
   
    public function getWebcamList()
    {
        $url =  '/feed/webcams/online/61/1';
        
        $headers = array ();
        
        $response = $this->get($url, array('verify' => false, 'headers' => $headers, 'exceptions' => false));
        $responseContent = json_decode($response->getBody(), true);
        return $responseContent;
    }

    public function getHappyMessage()
    {
        $messages = [
            'You did it! You updated the system! Amazing!',
            'That was one of the coolest updates I\'ve seen all day!',
            'Great work! Keep going!',
        ];

        $index = array_rand($messages);

        return $messages[$index];
    }
}