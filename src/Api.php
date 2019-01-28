<?php
/**
 * Created by PhpStorm.
 * User: jens
 * Date: 28/01/19
 * Time: 19:32
 */

namespace App;


use GuzzleHttp\Client;

abstract class Api
{
    private static $baseUrl = 'https://api.oxxa.com/command.php';

    public static function call(string $command): string
    {
        $guzzle = new Client();
        $response = $guzzle->request('GET', self::$baseUrl . '?apiuser=' . getenv('OXXA_USERNAME') .
            '&apipassword=MD5' . md5(getenv('OXXA_PASSWORD')) .
            '&command=' . $command);

        return $response->getBody()->getContents();
    }
}