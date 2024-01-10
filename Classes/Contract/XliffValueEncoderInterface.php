<?php
declare(strict_types=1);

namespace Undefined\TranslateLocallang\Contract;

interface XliffValueEncoderInterface
{
    public function encodeValue(string $str): string;
}