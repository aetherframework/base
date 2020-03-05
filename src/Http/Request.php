<?php
/**
 * Created by PhpStorm.
 * User: aether-framework
 * Date: 13/01/16
 * Time: 18:16
 */

namespace AEtherFramework\Http;


class Request implements RequestInterface
{
    protected $queryParameters;
    protected $postParameters;
    protected $body;
    protected $headers;
    protected $path;
    protected $host;
    protected $protocol;
    protected $verb;
    protected $isHttps;

    /**
     * Returns the query parameters as a key value pair array
     * @return array
     */
    public function getQuery()
    {
        return $this->queryParameters;
    }

    /**
     * Returns the post parameters as a key value pair array
     * @return array
     */
    public function getPost()
    {
        return $this->postParameters;
    }

    /**
     * Returns the body of the request as a key value pair array
     * @return array
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Returns the request headers as a key value pair array
     * @return array
     */
    public function getHeaders()
    {
        return $this->headers;
    }

    /**
     * Returns the post parameter denoted by the supplied key
     *
     * Default value is returned if key is not present
     * @param string $key
     * @param mixed $default
     * @return mixed
     */
    public function getPostValue($key, $default = null)
    {
        return isset($this->postParameters[$key]) ? $this->postParameters[$key] : $default;
    }

    /**
     * @param string $key
     * @param $value
     * @return Request
     */
    public function addPostValue($key, $value)
    {
        $this->postParameters[$key] = $value;
        return $this;
    }

    /**
     * Returns the query parameter denoted by the supplied key
     *
     * Default value is returned if key is not present
     * @param string $key
     * @param mixed $default
     * @return mixed
     */
    public function getQueryValue($key, $default = null)
    {
        return isset($this->queryParameters[$key]) ? $this->queryParameters[$key] : $default;
    }

    /**
     * @param string $key
     * @param $value
     * @return Request
     */
    public function addQueryValue($key, $value)
    {
        $this->queryParameters[$key] = $value;
        return $this;
    }

    /**
     * @param string $key
     * @param mixed $default
     * @return mixed
     */
    public function getBodyValue($key, $default = null)
    {
        return isset($this->body[$key]) ? $this->body[$key] : $default;
    }

    /**
     * @param string $json
     * @return Request
     */
    public function setBody($json) {
        $this->body = json_decode($json, true);
        return $this;
    }

    /**
     * @param string $key
     * @param mixed $default
     * @return mixed
     */
    public function getHeaderValue($key, $default = null)
    {
        return isset($this->headers[$key]) ? $this->headers[$key] : $default;
    }

    /**
     * @param string $key
     * @param mixed $value
     * @return Request
     */
    public function addHeaderValue($key, $value)
    {
         $this->headers[$key] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getPath()
    {
        if (null === $this->path) {
            $this->path = '/';
        }
        return $this->path;
    }

    /**
     * @param string $path
     * @return Request
     */
    public function setPath($path)
    {
        $this->path = $path;
        return $this;
    }

    /**
     * @return string
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * @param string $host
     * @return Request
     */
    public function setHost($host)
    {
        $this->host = $host;
        return $this;
    }

    /**
     * @return string
     */
    public function getVerb()
    {
        return $this->verb;
    }

    /**
     * @param string $verb
     * @return Request
     */
    public function setVerb($verb)
    {
        $this->verb = $verb;
        return $this;
    }

    /**
     * @param $isHttps
     * @return Request
     */
    public function setHttps($isHttps) {
        $this->isHttps = $isHttps;
        return $this;
    }

    public function isHttps()
    {
        return $this->isHttps;
    }

    public function getFullyQualifiedUri()
    {
        $fullUri = sprintf(
            '%s://%s/%s',
                $this->isHttps() ? 'https' : 'http',
            $this->getHost(),
            ltrim($this->getPath(), '/')
        );
        $queryParameters = $this->getQuery();
        if (null != $queryParameters && 0 < count($queryParameters)) {
            $queryString = '';
            foreach ($queryParameters as $parameterName => $parameterValue) {
                $queryString .= sprintf(
                    '%s=%s&',
                        $parameterName,
                        $parameterValue
                );
            }
            $queryString = rtrim($queryString, '&');
            return $fullUri . '?' . $queryString;
        }
        return $fullUri;
    }

    /**
     * @return Request
     */
    public static function inboundRequest(): Request {
        $request = new self();
        $request
            ->setHost($_SERVER['HTTP_HOST'])
            ->setHttps(isset($_SERVER['HTTPS']) && 'on' == $_SERVER['HTTPS'])
            ->setPath($_SERVER['REQUEST_URI'])
            ->setVerb($_SERVER['REQUEST_METHOD'])
        ;
        foreach (getallheaders() as $name => $value) {
            $request->addHeaderValue($name, $value);
        }
        foreach ($_GET as $name => $value) {
            $request->addQueryValue($name, $value);
        }
        if (self::VERB_POST == $request->getVerb()) {
            if ('application/json' == strtolower($request->getHeaderValue('Content-Type'))) {
                $request->setBody(file_get_contents('php://input'));
            } else {
                foreach ($_POST as $name => $value) {
                    $request->addPostValue($name, $value);
                }
            }
        }
        return $request;
    }
}

