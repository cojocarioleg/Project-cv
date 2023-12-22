<?php

namespace App\Helpers;

use App\Models\Currency;

class CurrencyConversionHelper
{
    protected static $container;

    public static function loadContainer()
    {
        if (is_null(self::$container)) {
            $currencies = Currency::get();
            foreach ($currencies as $currency) {
                self::$container[$currency->code] = $currency;
            }
        }
    }

    public static function getCurrency()
    {
        self::loadContainer(); self::loadContainer();
        return self::$container;
    }

    public static function convert($sum, $originCurrencyCode = 'MDL', $targetCurrencyCode = null)
    {
        self::loadContainer();
        $originCurrency = self::$container[$originCurrencyCode];

        if (is_null($targetCurrencyCode)) {
            $targetCurrencyCode = session('currency', 'MDL');
        }
        $targetCurrency = self::$container[$targetCurrencyCode];

        return $sum * $originCurrency->rate / $targetCurrency->rate;
    }

    public static function getCurrencySymbol()
    {
        self::loadContainer();
        $currencyFromSession = session('currency', 'MDL');
        $currency = self::$container[$currencyFromSession];
        return $currency->symbol;
    }

    public static function getBaseCurrency()
    {
        self::loadContainer();

        foreach (self::$container as $code => $currency) {
            if ($currency->isMain()) {
                return $currency;
            }
        }
    }

}
