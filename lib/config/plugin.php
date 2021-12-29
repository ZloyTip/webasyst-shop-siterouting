<?php
return [
  'name' => 'Siterouting',
  'version' => '1.0.0',
  'vendor' => '972539',
  'handlers' => [
      '*' => [
          [
              'event_app_id' => 'site',
              'event'        => 'routing',
              'class'        => 'shopSiteroutingPlugin',
              'method'       => 'siteRouting'
          ]
      ]
  ],
];
