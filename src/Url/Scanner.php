<?php
namespace Susucool\Scanner\Url;

/**
 * Class Scanner
 * @package Susucool\Scanner\Url
 */
class Scanner
{

    /**
     * @var array
     */
    protected $urls;

    /**
     * @var \GuzzleHttp\Client
     */
    protected $httpClient;

    /**
     * Scanner constructor.
     * @param $urls
     */
    public function __construct(array $urls)
    {
        $this->urls = $urls;
        $this->httpClient = new \GuzzleHttp\Client();
    }

    /**
     * Get invalid URLs
     * @return array
     */
    public function getInvalidUrls()
    {
        $invalidUrls = [];
        foreach ($this->urls as $url) {
            try {
                $statusCode = $this->getStatusCodeForUrl($url);
            } catch (\Exception $e) {
                $statusCode = 500;
            }
            if ($statusCode >= 400) {
                array_push($invalidUrls, [
                    'url'=>$url,
                    'status'=>$statusCode
                ]);
            }
        }

        return $invalidUrls;
    }

    /**
     * Get HTTP status code for URL
     * @param String $url
     * @return int
     */
    protected function getStatusCodeForUrl(String $url)
    {
        $httpResponse = $this->httpClient->options($url);

        return $httpResponse->getStatusCode();
    }




}