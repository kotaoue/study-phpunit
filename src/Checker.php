<?php declare(strict_types=1);
final class Checker
{
    public static function isTrue($value): bool
    {
        if (is_bool($value)) {
            return $value === true;
        }
        if (is_string($value)) {
            return strtolower($value) === 'true';
        }
        return false;
    }
}
