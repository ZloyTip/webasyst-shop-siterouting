<?php

class shopSiteroutingPlugin extends shopPlugin
{
    public static function siteRouting(&$params = null)
    {
        $params = array_merge(
            [
                'siterouting_url' => [
                    'module' => 'frontend',
                    'action' => 'test',
                    'plugin' => 'siterouting',
                    'app' => 'shop',
                ]
            ], $params);
    }

}
