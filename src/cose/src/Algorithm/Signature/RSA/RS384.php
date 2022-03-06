<?php

declare(strict_types=1);

namespace Cose\Algorithm\Signature\RSA;

use const OPENSSL_ALGO_SHA384;

final class RS384 extends RSA
{
    public const ID = -258;

    public static function identifier(): int
    {
        return self::ID;
    }

    protected function getHashAlgorithm(): int
    {
        return OPENSSL_ALGO_SHA384;
    }
}
