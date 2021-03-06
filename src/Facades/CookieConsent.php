<?php

/*
 * This file is part of Laravel Cookie Consent.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DraperStudio\CookieConsent\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class CookieConsent.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
class CookieConsent extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'cookie-consent';
    }
}
