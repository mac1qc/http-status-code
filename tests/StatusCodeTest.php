<?php

declare(strict_types=1);

namespace MartinAC\tests;

use MartinAC\StatusCode;
use PHPUnit\Framework\TestCase;

class StatusCodeTest extends TestCase
{
    public function testGetValue(): void
    {
        $this->assertSame(100, StatusCode::CONTINUE->value);
    }

    public function testGetLabel(): void
    {
        $this->assertSame('Switching Protocols', StatusCode::getLabel(StatusCode::SWITCHING_PROTOCOL));
    }
}