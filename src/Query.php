<?php
namespace LastFm;

class Query
{
    /**
     * The URL used for all queries to the API.
     */
    const BASE_URL = 'http://ws.audioscrobbler.com/2.0/?';

    /**
     * @var string The API key used for all queries to the API.
     */
    protected $apiKey;

    /**
     * @var array The array of parameters that will make up a query.
     */
    protected $queryParams = [];

    /**
     * @param $apiKey
     */
    public function __construct($apiKey)
    {
        $this->apiKey = $apiKey;
        $this->setDefaultParams();
    }

    /**
     * Sets up the default query params for an API call.
     */
    protected function setDefaultParams()
    {
        $this->queryParams = [
            'api_key' => $this->apiKey,
            'format' => 'json'
        ];
    }

    /**
     * Adds a key/value pair to the query parameters.
     *
     * @param $key
     * @param $value
     * @return Query
     */
    public function add($key, $value): self
    {
        $this->queryParams[$key] = $value;
        return $this;
    }

    /**
     * Assembles the string for querying the API.
     *
     * @param bool|integer $resetQueryParams
     * @return string
     */
    public function get($resetQueryParams = true): string
    {
        $finalParams = [];
        foreach ($this->queryParams as $key => $value) {
            $finalParams[] = $key.'='.$value;
        }

        if ($resetQueryParams) {
            $this->setDefaultParams();
        }

        return self::BASE_URL.implode('&', $finalParams);
    }
}
