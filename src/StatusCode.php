<?php

declare(strict_types=1);

namespace MartinAC;

enum StatusCode: int
{
    case CONTINUE               = 100;
    case SWITCHING_PROTOCOL     = 101;
    case PROCESSING             = 102;
    case EARLY_HINTS            = 103;
    case RESPONSE_STALE         = 110;
    case REVILIDATION_FAILED    = 111;
    case DISCONNECTED_OPERATION = 112;
    case HEURISTIC_EXPIRATION   = 113;
    case MISCELLANOUS_WARNING   = 199;

    case OK                               = 200;
    case CREATED                          = 201;
    case ACCEPTED                         = 202;
    case NON_AUTHORITATIVE                = 203;
    case NO_CONTENT                       = 204;
    case RESET_CONTENT                    = 205;
    case PARTIAL_CONTENT                  = 206;
    case MULTI_STATUS                     = 207;
    case ALREADY_REPORTED                 = 208;
    case TRANSFORMATION_APPLIED           = 214;
    case THIS_IS_FINE                     = 218;
    case IM_USED                          = 226;
    case MISCELLANEOUS_PERSISTENT_WARNING = 299;

    case MULTIPLE_CHOICES   = 300;
    case MOVED_PERMAMENTLY  = 301;
    case FOUND              = 302;
    case SEE_OTHER          = 303;
    case NOT_MODIFIED       = 304;
    case USE_PROXY          = 305;
    case SWITCH_PROXY       = 306;
    case TEMPORARY_REDIRECT = 307;
    case PERMANENT_REDIRECT = 308;

    case BAD_REQUEST                       = 400;
    case UNAUTHORIZED                      = 401;
    case PAYMENT_REQUIRED                  = 402;
    case FORBIDDEN                         = 403;
    case NOT_FOUND                         = 404;
    case METHOD_NOT_ALLOWED                = 405;
    case NOT_ACCEPTABLE                    = 406;
    case PROXY_AUTHENTICATION_REQUIRED     = 407;
    case REQUEST_TIMEOUT                   = 408;
    case CONFLICT                          = 409;
    case GONE                              = 410;
    case LENGTH_REQUIRED                   = 411;
    case PRECONDITION_FAILED               = 412;
    case PAYLOAD_TOO_LARGE                 = 413;
    case URI_TOO_LONG                      = 414;
    case UNSUPPORTED_MEDIA_TYPE            = 415;
    case RANGE_NOT_SATISFIABLE             = 416;
    case EXPECTATION_FAILED                = 417;
    case TEAPOT                            = 418;
    case PAGE_EXPIRED                      = 419;
    case METHOD_FAILURE                    = 420;
    case ENHANCE_YOUR_CALM                 = 420;
    case MISDIRECTED_REQUEST               = 421;
    case UNPROCESSABLE_CONTENT             = 422;
    case LOCKED                            = 423;
    case FAILED_DEPENDENCY                 = 424;
    case TOO_EARLY                         = 425;
    case UPGRADE_REQUIRED                  = 426;
    case PRECONDITION_REQUIRED             = 428;
    case TOO_MANY_REQUESTS                 = 429;
    case REQUESTS_HEADER_FIELDS_TOO_LARGE  = 430;
    case REQUEST_HEADER_FIELDS_TOO_LARGE   = 431;
    case LOGIN_TIME_OUT                    = 440;
    case NO_RESPONSE                       = 444;
    case RETRY_WITH                        = 449;
    case BLOCKED_WINDOWS_PARENTAL_CONTROLS = 450;
    case UNAVAILABLE_LEGAL_REASONS         = 451;
    case REDIRECT                          = 451;
    case REQUEST_HEADER_TOO_LARGE          = 494;
    case SSL_CERTIFICATE_ERROR             = 495;
    case SSL_CERTIFICATE_REQUIRED          = 496;
    case HTTP_REQUEST_SENT_TO_HTTPS_PORT   = 497;
    case INVALID_TOKEN                     = 498;
    case TOKEN_REQUIRED                    = 499;

    case INTERNAL_SERVER_ERROR             = 500;
    case NOT_IMPLEMENTED                   = 501;
    case BAD_GATEWAY                       = 502;
    case SERVICE_UNAVAILABLE               = 503;
    case GATEWAY_TIMEOUT                   = 504;
    case HTTP_VERSION_NOT_SUPPORTED        = 505;
    case VARIANT_ALSO_NEGOTIATES           = 506;
    case INSUFFICIENT_STORAGE              = 507;
    case LOOP_DETECTED                     = 508;
    case BANDWITH_LIMIT_EXCEEDED           = 509;
    case NOT_EXTENDED                      = 510;
    case NETWORK_AUTHENTICATION_REQUIRED   = 511;
    case WEB_SERVER_RETURNED_UNKNOWN_ERROR = 520;
    case WEB_SERVER_DOWN                   = 521;
    case CONNECTION_TIME_OUT               = 522;
    case ORIGIN_UNREACHABLE                = 523;
    case TIMEOUT_OCCURRED                  = 524;
    case SSL_HANDSHAKE_FAILED              = 525;
    case INVALID_SSL_CERTIFICATE           = 526;
    case RAILGUN_ERROR                     = 527;
    case SITE_OVERLOADED                   = 529;
    case ORIGIN_DNS_ERROR                  = 530;
    case TEMPORARILY_DISABLED              = 540;
    case SERVER_UNAUTHORIZED               = 561;
    case NETWORK_READ_TIMEOUT_ERROR        = 598;
    case NETWORK_CONNECT_TIMEOUT_ERROR     = 599;

    case UNEXPECTED_TOKEN = 783;

    case NON_STANDARD = 999;

    public static function getLabel(self $value): string
    {
        return match ($value) {
            self::CONTINUE                          => 'Continue',
            self::SWITCHING_PROTOCOL                => 'Switching Protocols',
            self::PROCESSING                        => 'Processing',
            self::EARLY_HINTS                       => 'Early Hints',
            self::RESPONSE_STALE                    => 'Response is Stale',
            self::REVILIDATION_FAILED               => 'Revalidation Failed',
            self::DISCONNECTED_OPERATION            => 'Disconnected Operation',
            self::HEURISTIC_EXPIRATION              => 'Heuristic Expiration',
            self::MISCELLANOUS_WARNING              => 'Miscellaneous Warning',
            self::OK                                => 'OK',
            self::CREATED                           => 'Created',
            self::ACCEPTED                          => 'Accepted',
            self::NON_AUTHORITATIVE                 => 'Non-Authoritative Information',
            self::NO_CONTENT                        => 'No Content',
            self::RESET_CONTENT                     => 'Reset Content',
            self::PARTIAL_CONTENT                   => 'Partial Content',
            self::MULTI_STATUS                      => 'Multi-Status',
            self::ALREADY_REPORTED                  => 'Already Reported',
            self::TRANSFORMATION_APPLIED            => 'Transformation Applied',
            self::THIS_IS_FINE                      => 'This is fine',
            self::IM_USED                           => 'IM Used',
            self::MISCELLANEOUS_PERSISTENT_WARNING  => 'Miscellaneous Persistent Warning',
            self::MULTIPLE_CHOICES                  => 'Multiple Choices',
            self::MOVED_PERMAMENTLY                 => 'Moved Permanently',
            self::FOUND                             => 'Found',
            self::SEE_OTHER                         => 'See Other',
            self::NOT_MODIFIED                      => 'Not Modified',
            self::USE_PROXY                         => 'Use Proxy',
            self::SWITCH_PROXY                      => 'Switch Proxy',
            self::TEMPORARY_REDIRECT                => 'Temporary Redirect',
            self::PERMANENT_REDIRECT                => 'Permanent Redirect',
            self::BAD_REQUEST                       => 'Bad Request',
            self::UNAUTHORIZED                      => 'Unauthorized',
            self::PAYMENT_REQUIRED                  => 'Payment Required',
            self::FORBIDDEN                         => 'Forbidden',
            self::NOT_FOUND                         => 'Not Found',
            self::METHOD_NOT_ALLOWED                => 'Method Not Allowed',
            self::NOT_ACCEPTABLE                    => 'Not Acceptable',
            self::PROXY_AUTHENTICATION_REQUIRED     => 'Proxy Authentication Required',
            self::REQUEST_TIMEOUT                   => 'Request Timeout',
            self::CONFLICT                          => 'Conflict',
            self::GONE                              => 'Gone',
            self::LENGTH_REQUIRED                   => 'Length Required',
            self::PRECONDITION_FAILED               => 'Precondition Failed',
            self::PAYLOAD_TOO_LARGE                 => 'Payload Too Large',
            self::URI_TOO_LONG                      => 'URI Too Long',
            self::UNSUPPORTED_MEDIA_TYPE            => 'Unsupported Media Type',
            self::RANGE_NOT_SATISFIABLE             => 'Range Not Satisfiable',
            self::EXPECTATION_FAILED                => 'Expectation Failed',
            self::TEAPOT                            => 'I\'m a teapot',
            self::PAGE_EXPIRED                      => 'Page Expired',
            self::METHOD_FAILURE                    => 'Method Failure',
            self::ENHANCE_YOUR_CALM                 => 'Enhance Your Calm',
            self::MISDIRECTED_REQUEST               => 'Misdirected Request',
            self::UNPROCESSABLE_CONTENT             => 'Unprocessable Content',
            self::LOCKED                            => 'Locked',
            self::FAILED_DEPENDENCY                 => 'Failed Dependency',
            self::TOO_EARLY                         => 'Too Early',
            self::UPGRADE_REQUIRED                  => 'Upgrade Required',
            self::PRECONDITION_REQUIRED             => 'Precondition Required',
            self::TOO_MANY_REQUESTS                 => 'Too Many Requests',
            self::REQUESTS_HEADER_FIELDS_TOO_LARGE  => 'Requests Header Fields Too Large',
            self::REQUEST_HEADER_FIELDS_TOO_LARGE   => 'Request Header Fields Too Large',
            self::LOGIN_TIME_OUT                    => 'Login Time-out',
            self::NO_RESPONSE                       => 'No Response',
            self::RETRY_WITH                        => 'Retry With',
            self::BLOCKED_WINDOWS_PARENTAL_CONTROLS => 'Blocked by Windows Parental Controls',
            self::UNAVAILABLE_LEGAL_REASONS         => 'Unavailable For Legal Reasons',
            self::REDIRECT                          => 'Redirect',
            self::REQUEST_HEADER_TOO_LARGE          => 'Request header too large',
            self::SSL_CERTIFICATE_ERROR             => 'SSL Certificate Error',
            self::SSL_CERTIFICATE_REQUIRED          => 'SSL Certificate Required',
            self::HTTP_REQUEST_SENT_TO_HTTPS_PORT   => 'HTTP Request Sent to HTTPS Port',
            self::INVALID_TOKEN                     => 'Invalid Token',
            self::TOKEN_REQUIRED                    => 'Token Required',
            self::INTERNAL_SERVER_ERROR             => 'Internal Server Error',
            self::NOT_IMPLEMENTED                   => 'Not Implemented',
            self::BAD_GATEWAY                       => 'Bad Gateway',
            self::SERVICE_UNAVAILABLE               => 'Service Unavailable',
            self::GATEWAY_TIMEOUT                   => 'Gateway Timeout',
            self::HTTP_VERSION_NOT_SUPPORTED        => 'HTTP Version Not Supported',
            self::VARIANT_ALSO_NEGOTIATES           => 'Variant Also Negotiates',
            self::INSUFFICIENT_STORAGE              => 'Insufficient Storage',
            self::LOOP_DETECTED                     => 'Loop Detected',
            self::BANDWITH_LIMIT_EXCEEDED           => 'Bandwidth Limit Exceeded',
            self::NOT_EXTENDED                      => 'Not Extended',
            self::NETWORK_AUTHENTICATION_REQUIRED   => 'Network Authentication Required',
            self::WEB_SERVER_RETURNED_UNKNOWN_ERROR => 'Web Server Returned an Unknown Error',
            self::WEB_SERVER_DOWN                   => 'Web Server Is Down',
            self::CONNECTION_TIME_OUT               => 'Connection Timed Out',
            self::ORIGIN_UNREACHABLE                => 'Origin Is Unreachable',
            self::TIMEOUT_OCCURRED                  => 'A Timeout Occurred',
            self::SSL_HANDSHAKE_FAILED              => 'SSL Handshake Failed',
            self::INVALID_SSL_CERTIFICATE           => 'Invalid SSL Certificate',
            self::RAILGUN_ERROR                     => 'Railgun Error',
            self::SITE_OVERLOADED                   => 'Site is overloaded',
            self::ORIGIN_DNS_ERROR                  => 'Origin DNS Error',
            self::TEMPORARILY_DISABLED              => 'Temporarily Disabled',
            self::SERVER_UNAUTHORIZED               => 'Unauthorized',
            self::NETWORK_READ_TIMEOUT_ERROR        => 'Network read timeout error',
            self::NETWORK_CONNECT_TIMEOUT_ERROR     => 'Network Connect Timeout Error',
            self::UNEXPECTED_TOKEN                  => 'Unexpected Token',
            self::NON_STANDARD                      => 'Non-standard',
        };
    }
}