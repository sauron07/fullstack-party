<?php
/**
 * Class CorsListener.
 *
 * @category Service
 * @package  AppBundle
 * @author   Aleksandr Matvieiev <matyeyev.sasha@gmail.com>
 * @license  http://opensource.org/licenses/gpl-license.php GNU Public License
 */

namespace AppBundle\Service;


use Symfony\Component\HttpKernel\Event\FilterResponseEvent;

class CorsListener
{
    /**
     * Set cors response headers.
     *
     * @param FilterResponseEvent $event Response event instance.
     *
     * @return void
     */
    public function onKernelResponse(FilterResponseEvent $event): void
    {
        $responseHeaders = $event->getResponse()->headers;

        $responseHeaders->set('Access-Control-Allow-Origin', '*');
        $responseHeaders->set('Access-Control-Allow-Headers', 'Content-Type');
    }

}