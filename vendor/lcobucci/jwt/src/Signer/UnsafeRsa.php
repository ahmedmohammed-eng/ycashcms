<?php
declare(strict_types=1);

namespace Lcobucci\JWT\Signer;

use const OPENSSL_KEYTYPE_RSA;

/** @deprecated Deprecated since v4.2 */
abstract class UnsafeRsa extends OpenSSL
{
    final public function sign(string $payload, Key $key): string
    {
        return $this->createSignature($key->contents(), $key->passphrase(), $payload);
    }

    final public function verify(string $expected, string $payload, Key $key): bool
    {
        return $this->verifySignature($expected, $payload, $key->contents());
    }

    final public function keyType(): int
    {
        return OPENSSL_KEYTYPE_RSA;
    }

    final public function minimumBitsLengthForKey(): int
    {
        return 1;
    }
}
