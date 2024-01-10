<?php
declare(strict_types=1);

namespace Undefined\TranslateLocallang\Service;

use Undefined\TranslateLocallang\Contract\XliffValueEncoderInterface;

class XliffValueEncoder implements XliffValueEncoderInterface
{

    public function encodeValue(string $str): string
    {
        if (strpos(ltrim($str), XliffService::CDATA_START) === 0) {
            return ltrim($str);
        } else {
            return htmlspecialchars($str);
        }
    }
}