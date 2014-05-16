<?php
//@cache
require_once __DIR__.'/AppKernel.php';

use Symfony\Bundle\FrameworkBundle\HttpCache\HttpCache;

class AppCache extends HttpCache
{
    protected function getOptions()
    {
        return array(
            'debug'                  => true,
            'default_ttl'            => 60*60*24,
            'private_headers'        => array('Authorization', 'Cookie'),
            'allow_reload'           => true,
            'allow_revalidate'       => true,
            'stale_while_revalidate' => 2,
            'stale_if_error'         => 60,
        );
    }
}
