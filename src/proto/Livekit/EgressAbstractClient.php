<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT! (protoc-gen-twirp_php 0.8.1)
# source: livekit_egress.proto

declare(strict_types=1);

namespace Livekit;

use Google\Protobuf\Internal\Message;
use Http\Discovery\Psr17FactoryDiscovery;
use Http\Discovery\Psr18ClientDiscovery;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamFactoryInterface;
use Twirp\Context;
use Twirp\Error;
use Twirp\ErrorCode;

/**
 * @internal EgressAbstractClient provides abstraction for JsonClient and Client (default).
 * Note that you MUST NOT use it directly! It is an internal implementation detail that is not
 * covered by backward compatibility promise. The only thing that will and should remain backward
 * compatible is the two clients.
 */
abstract class EgressAbstractClient
{
    /**
     * @var server
     */
    protected $addr;

    /**
     * @var ClientInterface
     */
    protected $httpClient;

    /**
     * @var RequestFactoryInterface
     */
    protected $requestFactory;

    /**
     * @var StreamFactoryInterface
     */
    protected $streamFactory;

    /**
     * @var string
     */
    protected $prefix;

    public function __construct(
        $addr,
        ClientInterface $httpClient = null,
        RequestFactoryInterface $requestFactory = null,
        StreamFactoryInterface $streamFactory = null,
        string $prefix = '/twirp'
    ) {
        if ($httpClient === null) {
            $httpClient = Psr18ClientDiscovery::find();
        }

        if ($requestFactory === null) {
            $requestFactory = Psr17FactoryDiscovery::findRequestFactory();
        }

        if ($streamFactory === null) {
            $streamFactory = Psr17FactoryDiscovery::findStreamFactory();
        }

        $this->addr = $this->urlBase($addr);
        $this->httpClient = $httpClient;
        $this->requestFactory = $requestFactory;
        $this->streamFactory = $streamFactory;
        $this->prefix = ltrim(rtrim($prefix, '/'), '/');
    }

    /**
     * {@inheritdoc}
     */
    public function StartRoomCompositeEgress(array $ctx, \Livekit\RoomCompositeEgressRequest $in): \Livekit\EgressInfo
    {
        $ctx = Context::withPackageName($ctx, 'livekit');
        $ctx = Context::withServiceName($ctx, 'Egress');
        $ctx = Context::withMethodName($ctx, 'StartRoomCompositeEgress');

        $out = new \Livekit\EgressInfo();

        $url = $this->addr;
        if (empty($this->prefix)) {
            $url = $url.'/livekit.Egress/StartRoomCompositeEgress';
        } else {
            $url = $url.'/'.$this->prefix.'/livekit.Egress/StartRoomCompositeEgress';
        }

        $this->doRequest($ctx, $url, $in, $out);

        return $out;
    }

    /**
     * {@inheritdoc}
     */
    public function StartWebEgress(array $ctx, \Livekit\WebEgressRequest $in): \Livekit\EgressInfo
    {
        $ctx = Context::withPackageName($ctx, 'livekit');
        $ctx = Context::withServiceName($ctx, 'Egress');
        $ctx = Context::withMethodName($ctx, 'StartWebEgress');

        $out = new \Livekit\EgressInfo();

        $url = $this->addr;
        if (empty($this->prefix)) {
            $url = $url.'/livekit.Egress/StartWebEgress';
        } else {
            $url = $url.'/'.$this->prefix.'/livekit.Egress/StartWebEgress';
        }

        $this->doRequest($ctx, $url, $in, $out);

        return $out;
    }

    /**
     * {@inheritdoc}
     */
    public function StartParticipantEgress(array $ctx, \Livekit\ParticipantEgressRequest $in): \Livekit\EgressInfo
    {
        $ctx = Context::withPackageName($ctx, 'livekit');
        $ctx = Context::withServiceName($ctx, 'Egress');
        $ctx = Context::withMethodName($ctx, 'StartParticipantEgress');

        $out = new \Livekit\EgressInfo();

        $url = $this->addr;
        if (empty($this->prefix)) {
            $url = $url.'/livekit.Egress/StartParticipantEgress';
        } else {
            $url = $url.'/'.$this->prefix.'/livekit.Egress/StartParticipantEgress';
        }

        $this->doRequest($ctx, $url, $in, $out);

        return $out;
    }

    /**
     * {@inheritdoc}
     */
    public function StartTrackCompositeEgress(array $ctx, \Livekit\TrackCompositeEgressRequest $in): \Livekit\EgressInfo
    {
        $ctx = Context::withPackageName($ctx, 'livekit');
        $ctx = Context::withServiceName($ctx, 'Egress');
        $ctx = Context::withMethodName($ctx, 'StartTrackCompositeEgress');

        $out = new \Livekit\EgressInfo();

        $url = $this->addr;
        if (empty($this->prefix)) {
            $url = $url.'/livekit.Egress/StartTrackCompositeEgress';
        } else {
            $url = $url.'/'.$this->prefix.'/livekit.Egress/StartTrackCompositeEgress';
        }

        $this->doRequest($ctx, $url, $in, $out);

        return $out;
    }

    /**
     * {@inheritdoc}
     */
    public function StartTrackEgress(array $ctx, \Livekit\TrackEgressRequest $in): \Livekit\EgressInfo
    {
        $ctx = Context::withPackageName($ctx, 'livekit');
        $ctx = Context::withServiceName($ctx, 'Egress');
        $ctx = Context::withMethodName($ctx, 'StartTrackEgress');

        $out = new \Livekit\EgressInfo();

        $url = $this->addr;
        if (empty($this->prefix)) {
            $url = $url.'/livekit.Egress/StartTrackEgress';
        } else {
            $url = $url.'/'.$this->prefix.'/livekit.Egress/StartTrackEgress';
        }

        $this->doRequest($ctx, $url, $in, $out);

        return $out;
    }

    /**
     * {@inheritdoc}
     */
    public function UpdateLayout(array $ctx, \Livekit\UpdateLayoutRequest $in): \Livekit\EgressInfo
    {
        $ctx = Context::withPackageName($ctx, 'livekit');
        $ctx = Context::withServiceName($ctx, 'Egress');
        $ctx = Context::withMethodName($ctx, 'UpdateLayout');

        $out = new \Livekit\EgressInfo();

        $url = $this->addr;
        if (empty($this->prefix)) {
            $url = $url.'/livekit.Egress/UpdateLayout';
        } else {
            $url = $url.'/'.$this->prefix.'/livekit.Egress/UpdateLayout';
        }

        $this->doRequest($ctx, $url, $in, $out);

        return $out;
    }

    /**
     * {@inheritdoc}
     */
    public function UpdateStream(array $ctx, \Livekit\UpdateStreamRequest $in): \Livekit\EgressInfo
    {
        $ctx = Context::withPackageName($ctx, 'livekit');
        $ctx = Context::withServiceName($ctx, 'Egress');
        $ctx = Context::withMethodName($ctx, 'UpdateStream');

        $out = new \Livekit\EgressInfo();

        $url = $this->addr;
        if (empty($this->prefix)) {
            $url = $url.'/livekit.Egress/UpdateStream';
        } else {
            $url = $url.'/'.$this->prefix.'/livekit.Egress/UpdateStream';
        }

        $this->doRequest($ctx, $url, $in, $out);

        return $out;
    }

    /**
     * {@inheritdoc}
     */
    public function ListEgress(array $ctx, \Livekit\ListEgressRequest $in): \Livekit\ListEgressResponse
    {
        $ctx = Context::withPackageName($ctx, 'livekit');
        $ctx = Context::withServiceName($ctx, 'Egress');
        $ctx = Context::withMethodName($ctx, 'ListEgress');

        $out = new \Livekit\ListEgressResponse();

        $url = $this->addr;
        if (empty($this->prefix)) {
            $url = $url.'/livekit.Egress/ListEgress';
        } else {
            $url = $url.'/'.$this->prefix.'/livekit.Egress/ListEgress';
        }

        $this->doRequest($ctx, $url, $in, $out);

        return $out;
    }

    /**
     * {@inheritdoc}
     */
    public function StopEgress(array $ctx, \Livekit\StopEgressRequest $in): \Livekit\EgressInfo
    {
        $ctx = Context::withPackageName($ctx, 'livekit');
        $ctx = Context::withServiceName($ctx, 'Egress');
        $ctx = Context::withMethodName($ctx, 'StopEgress');

        $out = new \Livekit\EgressInfo();

        $url = $this->addr;
        if (empty($this->prefix)) {
            $url = $url.'/livekit.Egress/StopEgress';
        } else {
            $url = $url.'/'.$this->prefix.'/livekit.Egress/StopEgress';
        }

        $this->doRequest($ctx, $url, $in, $out);

        return $out;
    }

    /**
     * Common code to make a request to the remote twirp service.
     */
    abstract protected function doRequest(array $ctx, string $url, Message $in, Message $out): void;

    /**
     * Makes an HTTP request and adds common headers.
     */
    protected function newRequest(array $ctx, string $url, string $reqBody, string $contentType): RequestInterface
    {
        $body = $this->streamFactory->createStream($reqBody);

        $req = $this->requestFactory->createRequest('POST', $url);

        $headers = Context::httpRequestHeaders($ctx);

        foreach ($headers as $key => $value) {
            $req = $req->withHeader($key, $value);
        }

        return $req
            ->withBody($body)
            ->withHeader('Accept', $contentType)
            ->withHeader('Content-Type', $contentType)
            ->withHeader('Twirp-Version', 'v8.1.0')
            ->withHeader('TwirPHP-Version', '0.8.1')
        ;
    }

    /**
     * Adds consistency to errors generated in the client.
     */
    protected function clientError(string $desc, \Throwable $e): TwirpError
    {
        return TwirpError::newError(ErrorCode::Internal, sprintf('%s: %s', $desc, $e->getMessage()), $e);
    }

    /**
     * Builds a twirp Error from a non-200 HTTP response.
     * If the response has a valid serialized Twirp error, then it's returned.
     * If not, the response status code is used to generate a similar twirp
     * error. {@see self::twirpErrorFromIntermediary} for more info on intermediary errors.
     */
    protected function errorFromResponse(ResponseInterface $resp): TwirpError
    {
        $statusCode = $resp->getStatusCode();
        $statusText = $resp->getReasonPhrase();

        if ($this->isHttpRedirect($statusCode)) {
            // Unexpected redirect: it must be an error from an intermediary.
            // Twirp clients don't follow redirects automatically, Twirp only handles
            // POST requests, redirects should only happen on GET and HEAD requests.
            $location = $resp->getHeaderLine('Location');
            $msg = sprintf(
                'unexpected HTTP status code %d "%s" received, Location="%s"',
                $statusCode,
                $statusText,
                $location
            );

            return $this->twirpErrorFromIntermediary($statusCode, $msg, $location);
        }

        $body = (string)$resp->getBody();

        $rawError = json_decode($body, true);
        if ($rawError === null) {
            $msg = sprintf('error from intermediary with HTTP status code %d "%s"', $statusCode, $statusText);

            return $this->twirpErrorFromIntermediary($statusCode, $msg, $body);
        }

        $rawError = $rawError + ['code' => '', 'msg' => '', 'meta' => []];

        if (ErrorCode::isValid($rawError['code']) === false) {
            $msg = 'invalid type returned from server error response: '.$rawError['code'];

            return TwirpError::newError(ErrorCode::Internal, $msg);
        }

        $error = TwirpError::newError($rawError['code'], $rawError['msg']);

        foreach ($rawError['meta'] as $key => $value) {
           $error->setMeta($key, $value);
        }

        return $error;
    }

    /**
     * Maps HTTP errors from non-twirp sources to twirp errors.
     * The mapping is similar to gRPC: https://github.com/grpc/grpc/blob/master/doc/http-grpc-status-mapping.md.
     * Returned twirp Errors have some additional metadata for inspection.
     */
    protected function twirpErrorFromIntermediary(int $status, string $msg, string $bodyOrLocation): TwirpError
    {
        if ($this->isHttpRedirect($status)) {
            $code = ErrorCode::Internal;
        } else {
            switch ($status) {
                case 400: // Bad Request
                    $code = ErrorCode::Internal;
                    break;
                case 401: // Unauthorized
                    $code = ErrorCode::Unauthenticated;
                    break;
                case 403: // Forbidden
                    $code = ErrorCode::PermissionDenied;
                    break;
                case 404: // Not Found
                    $code = ErrorCode::BadRoute;
                    break;
                case 429: // Too Many Requests
                    $code = ErrorCode::ResourceExhausted;
                    break;
                case 502: // Bad Gateway
                case 503: // Service Unavailable
                case 504: // Gateway Timeout
                    $code = ErrorCode::Unavailable;
                    break;
                default: // All other codes
                    $code = ErrorCode::Unknown;
                    break;
            }
        }

        $error = TwirpError::newError($code, $msg);
        $error->setMeta('http_error_from_intermediary', 'true');
        $error->setMeta('status_code', (string)$status);

        if ($this->isHttpRedirect($status)) {
            $error->setMeta('location', $bodyOrLocation);
        } else {
            $error->setMeta('body', $bodyOrLocation);
        }

        return $error;
    }

    protected function isHttpRedirect(int $status): bool
    {
        return $status >= 300 && $status <= 399;
    }

    protected function urlBase(string $addr): string
    {
        $scheme = parse_url($addr, PHP_URL_SCHEME);

        // If parse_url fails, return the addr unchanged.
        if ($scheme === false) {
            return $addr;
        }

        // If the addr does not specify a scheme, default to http.
        if (empty($scheme)) {
            $addr = 'http://'.ltrim($addr, ':/');
        }

        return $addr;
    }
}
