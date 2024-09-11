<?php

declare(strict_types=1);

namespace MartinAC;

use Exception;

enum StatusCode: int
{
    const __default = 0;

    case CONTINUE               = 100;
    case SWITCHING_PROTOCOL     = 101;
    case PROCESSING             = 102;
    case EARLY_HINTS            = 103;
    case RESPONSE_STALE         = 110;
    case REVILIDATION_FAILED    = 111;
    case DISCONNECTED_OPERATION = 112;
    case HEURISTIC_EXPIRATION   = 113;
    case MISCELLANOUS_WARNING   = 199;
    /*
    100 Continue
    101 Switching Protocols
    102 Processing (WebDAV; RFC 2518)
    103 Early Hints (RFC 8297)
    110 Response is Stale
    111 Revalidation Failed
    112 Disconnected Operation
    113 Heuristic Expiration
    199 Miscellaneous Warning

    200 OK
    201 Created
    202 Accepted
    203 Non-Authoritative Information (since HTTP/1.1)
    204 No Content
    205 Reset Content
    206 Partial Content
    207 Multi-Status (WebDAV; RFC 4918)
    208 Already Reported (WebDAV; RFC 5842)
    214 Transformation Applied
    218 This is fine 
    226 IM Used (RFC 3229)
    299 Miscellaneous Persistent Warning

    300 Multiple Choices
    301 Moved Permanently
    302 Found (Previously "Moved temporarily")
    303 See Other (since HTTP/1.1)
    304 Not Modified
    305 Use Proxy (since HTTP/1.1)
    306 Switch Proxy
    307 Temporary Redirect (since HTTP/1.1)
    308 Permanent Redirect

    400 Bad Request
    401 Unauthorized
    402 Payment Required
    403 Forbidden
    404 Not Found
    405 Method Not Allowed
    406 Not Acceptable
    407 Proxy Authentication Required
    408 Request Timeout
    409 Conflict
    410 Gone
    411 Length Required
    412 Precondition Failed
    413 Payload Too Large
    414 URI Too Long
    415 Unsupported Media Type
    416 Range Not Satisfiable
    417 Expectation Failed
    418 I'm a teapot (RFC 2324, RFC 7168)
    419 Page Expired (Laravel Framework)
    420 Method Failure (Spring Framework)
    420 Enhance Your Calm
    421 Misdirected Request
    422 Unprocessable Content
    423 Locked (WebDAV; RFC 4918)
    424 Failed Dependency (WebDAV; RFC 4918)
    425 Too Early (RFC 8470)
    426 Upgrade Required
    428 Precondition Required (RFC 6585)
    429 Too Many Requests (RFC 6585)
    430 Request Header Fields Too Large (Shopify)
    430 Shopify Security Rejection (Shopify)
    431 Request Header Fields Too Large (RFC 6585)
    440 Login Time-out
    444 No Response
    449 Retry With
    450 Blocked by Windows Parental Controls
    451 Unavailable For Legal Reasons (RFC 7725)
    451 Redirect
    494 Request header too large
    495 SSL Certificate Error
    496 SSL Certificate Required
    497 HTTP Request Sent to HTTPS Port
    498 Invalid Token (Esri)
    499 Client Closed Request
    499 Token Required (Esri)

    500 Internal Server Error
    501 Not Implemented
    502 Bad Gateway
    503 Service Unavailable
    504 Gateway Timeout
    505 HTTP Version Not Supported
    506 Variant Also Negotiates (RFC 2295)
    507 Insufficient Storage (WebDAV; RFC 4918)
    508 Loop Detected (WebDAV; RFC 5842)
    509 Bandwidth Limit Exceeded
    510 Not Extended (RFC 2774)
    511 Network Authentication Required (RFC 6585)
    520 Web Server Returned an Unknown Error
    521 Web Server Is Down
    522 Connection Timed Out
    523 Origin Is Unreachable
    524 A Timeout Occurred
    525 SSL Handshake Failed
    526 Invalid SSL Certificate
    527 Railgun Error (obsolete)
    529 Site is overloaded
    530 Site is frozen
    530 Origin DNS Error (Shopify)
    540 Temporarily Disabled (Shopify)
    561 Unauthorized
    598 (Informal convention) Network read timeout error
    599 Network Connect Timeout Error

    783 Unexpected Token (Shopify)

    999 Non-standard
    */

    public static function getLabel(self $value): string
    {
        return match ($value) {
            self::CONTINUE               => 'Continue',
            self::SWITCHING_PROTOCOL     => 'Switching Protocols',
            self::PROCESSING             => 'Processing',
            self::EARLY_HINTS            => 'Early Hints',
            self::RESPONSE_STALE         => 'Response is Stale',
            self::REVILIDATION_FAILED    => 'Revalidation Failed',
            self::DISCONNECTED_OPERATION => 'Disconnected Operation',
            self::HEURISTIC_EXPIRATION   => 'Heuristic Expiration',
            self::MISCELLANOUS_WARNING   => 'Miscellaneous Warning',
        };
    }
}