<?php return array (
  0 => 
  array (
    'GET' => 
    array (
      '/latest/EspoCRM-7.4.3/api/v1/Activities/upcoming' => 'route2',
      '/latest/EspoCRM-7.4.3/api/v1/Activities' => 'route3',
      '/latest/EspoCRM-7.4.3/api/v1/Timeline' => 'route4',
      '/latest/EspoCRM-7.4.3/api/v1/Timeline/busyRanges' => 'route5',
      '/latest/EspoCRM-7.4.3/api/v1/' => 'route9',
      '/latest/EspoCRM-7.4.3/api/v1/App/user' => 'route10',
      '/latest/EspoCRM-7.4.3/api/v1/Metadata' => 'route12',
      '/latest/EspoCRM-7.4.3/api/v1/I18n' => 'route13',
      '/latest/EspoCRM-7.4.3/api/v1/Settings' => 'route14',
      '/latest/EspoCRM-7.4.3/api/v1/Stream' => 'route17',
      '/latest/EspoCRM-7.4.3/api/v1/GlobalSearch' => 'route18',
      '/latest/EspoCRM-7.4.3/api/v1/Admin/jobs' => 'route29',
      '/latest/EspoCRM-7.4.3/api/v1/CurrencyRate' => 'route35',
      '/latest/EspoCRM-7.4.3/api/v1/Email/inbox/notReadCounts' => 'route66',
      '/latest/EspoCRM-7.4.3/api/v1/Email/insertFieldData' => 'route67',
      '/latest/EspoCRM-7.4.3/api/v1/EmailAddress/search' => 'route68',
      '/latest/EspoCRM-7.4.3/api/v1/Oidc/authorizationData' => 'route76',
    ),
    'POST' => 
    array (
      '/latest/EspoCRM-7.4.3/api/v1/App/destroyAuthToken' => 'route11',
      '/latest/EspoCRM-7.4.3/api/v1/Admin/rebuild' => 'route27',
      '/latest/EspoCRM-7.4.3/api/v1/Admin/clearCache' => 'route28',
      '/latest/EspoCRM-7.4.3/api/v1/Action' => 'route37',
      '/latest/EspoCRM-7.4.3/api/v1/MassAction' => 'route38',
      '/latest/EspoCRM-7.4.3/api/v1/Export' => 'route41',
      '/latest/EspoCRM-7.4.3/api/v1/Import' => 'route44',
      '/latest/EspoCRM-7.4.3/api/v1/Import/file' => 'route45',
      '/latest/EspoCRM-7.4.3/api/v1/Attachment/fromImageUrl' => 'route54',
      '/latest/EspoCRM-7.4.3/api/v1/Email/sendTest' => 'route58',
      '/latest/EspoCRM-7.4.3/api/v1/Email/inbox/read' => 'route59',
      '/latest/EspoCRM-7.4.3/api/v1/Email/inbox/important' => 'route61',
      '/latest/EspoCRM-7.4.3/api/v1/Email/inbox/inTrash' => 'route63',
      '/latest/EspoCRM-7.4.3/api/v1/UserSecurity/apiKey/generate' => 'route70',
      '/latest/EspoCRM-7.4.3/api/v1/UserSecurity/password/recovery' => 'route72',
      '/latest/EspoCRM-7.4.3/api/v1/UserSecurity/password/generate' => 'route73',
      '/latest/EspoCRM-7.4.3/api/v1/User/passwordChangeRequest' => 'route74',
      '/latest/EspoCRM-7.4.3/api/v1/User/changePasswordByRequest' => 'route75',
      '/latest/EspoCRM-7.4.3/api/v1/Oidc/backchannelLogout' => 'route77',
    ),
    'PATCH' => 
    array (
      '/latest/EspoCRM-7.4.3/api/v1/Settings' => 'route15',
    ),
    'PUT' => 
    array (
      '/latest/EspoCRM-7.4.3/api/v1/Settings' => 'route16',
      '/latest/EspoCRM-7.4.3/api/v1/CurrencyRate' => 'route36',
      '/latest/EspoCRM-7.4.3/api/v1/Kanban/order' => 'route50',
      '/latest/EspoCRM-7.4.3/api/v1/UserSecurity/password' => 'route71',
    ),
    'DELETE' => 
    array (
      '/latest/EspoCRM-7.4.3/api/v1/Email/inbox/read' => 'route60',
      '/latest/EspoCRM-7.4.3/api/v1/Email/inbox/important' => 'route62',
      '/latest/EspoCRM-7.4.3/api/v1/Email/inbox/inTrash' => 'route64',
    ),
  ),
  1 => 
  array (
    'GET' => 
    array (
      0 => 
      array (
        'regex' => '~^(?|/latest/EspoCRM\\-7\\.4\\.3/api/v1/Activities/([^/]+)/([^/]+)/([^/]+)|/latest/EspoCRM\\-7\\.4\\.3/api/v1/Activities/([^/]+)/([^/]+)/([^/]+)/list/([^/]+)|/latest/EspoCRM\\-7\\.4\\.3/api/v1/Meeting/([^/]+)/attendees()()()()|/latest/EspoCRM\\-7\\.4\\.3/api/v1/Call/([^/]+)/attendees()()()()()|/latest/EspoCRM\\-7\\.4\\.3/api/v1/([^/]+)/action/([^/]+)()()()()()|/latest/EspoCRM\\-7\\.4\\.3/api/v1/([^/]+)/layout/([^/]+)()()()()()()|/latest/EspoCRM\\-7\\.4\\.3/api/v1/Admin/fieldManager/([^/]+)/([^/]+)()()()()()()()|/latest/EspoCRM\\-7\\.4\\.3/api/v1/MassAction/([^/]+)/status()()()()()()()()()|/latest/EspoCRM\\-7\\.4\\.3/api/v1/Export/([^/]+)/status()()()()()()()()()())$~',
        'routeMap' => 
        array (
          4 => 
          array (
            0 => 'route0',
            1 => 
            array (
              'parentType' => 'parentType',
              'id' => 'id',
              'type' => 'type',
            ),
          ),
          5 => 
          array (
            0 => 'route1',
            1 => 
            array (
              'parentType' => 'parentType',
              'id' => 'id',
              'type' => 'type',
              'targetType' => 'targetType',
            ),
          ),
          6 => 
          array (
            0 => 'route6',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          7 => 
          array (
            0 => 'route7',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          8 => 
          array (
            0 => 'route23',
            1 => 
            array (
              'controller' => 'controller',
              'action' => 'action',
            ),
          ),
          9 => 
          array (
            0 => 'route24',
            1 => 
            array (
              'controller' => 'controller',
              'name' => 'name',
            ),
          ),
          10 => 
          array (
            0 => 'route30',
            1 => 
            array (
              'scope' => 'scope',
              'name' => 'name',
            ),
          ),
          11 => 
          array (
            0 => 'route39',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          12 => 
          array (
            0 => 'route42',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
        ),
      ),
      1 => 
      array (
        'regex' => '~^(?|/latest/EspoCRM\\-7\\.4\\.3/api/v1/Kanban/([^/]+)|/latest/EspoCRM\\-7\\.4\\.3/api/v1/Attachment/file/([^/]+)()|/latest/EspoCRM\\-7\\.4\\.3/api/v1/User/([^/]+)/acl()()|/latest/EspoCRM\\-7\\.4\\.3/api/v1/([^/]+)/([^/]+)()()|/latest/EspoCRM\\-7\\.4\\.3/api/v1/([^/]+)()()()()|/latest/EspoCRM\\-7\\.4\\.3/api/v1/([^/]+)/([^/]+)/stream()()()()|/latest/EspoCRM\\-7\\.4\\.3/api/v1/([^/]+)/([^/]+)/posts()()()()()|/latest/EspoCRM\\-7\\.4\\.3/api/v1/([^/]+)/([^/]+)/([^/]+)()()()()())$~',
        'routeMap' => 
        array (
          2 => 
          array (
            0 => 'route51',
            1 => 
            array (
              'entityType' => 'entityType',
            ),
          ),
          3 => 
          array (
            0 => 'route52',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          4 => 
          array (
            0 => 'route69',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          5 => 
          array (
            0 => 'route78',
            1 => 
            array (
              'controller' => 'controller',
              'id' => 'id',
            ),
          ),
          6 => 
          array (
            0 => 'route79',
            1 => 
            array (
              'controller' => 'controller',
            ),
          ),
          7 => 
          array (
            0 => 'route84',
            1 => 
            array (
              'controller' => 'controller',
              'id' => 'id',
            ),
          ),
          8 => 
          array (
            0 => 'route85',
            1 => 
            array (
              'controller' => 'controller',
              'id' => 'id',
            ),
          ),
          9 => 
          array (
            0 => 'route88',
            1 => 
            array (
              'controller' => 'controller',
              'id' => 'id',
              'link' => 'link',
            ),
          ),
        ),
      ),
    ),
    'POST' => 
    array (
      0 => 
      array (
        'regex' => '~^(?|/latest/EspoCRM\\-7\\.4\\.3/api/v1/Campaign/([^/]+)/generateMailMerge|/latest/EspoCRM\\-7\\.4\\.3/api/v1/LeadCapture/([^/]+)()|/latest/EspoCRM\\-7\\.4\\.3/api/v1/([^/]+)/action/([^/]+)()|/latest/EspoCRM\\-7\\.4\\.3/api/v1/Admin/fieldManager/([^/]+)()()()|/latest/EspoCRM\\-7\\.4\\.3/api/v1/MassAction/([^/]+)/subscribe()()()()|/latest/EspoCRM\\-7\\.4\\.3/api/v1/Export/([^/]+)/subscribe()()()()()|/latest/EspoCRM\\-7\\.4\\.3/api/v1/Import/([^/]+)/revert()()()()()()|/latest/EspoCRM\\-7\\.4\\.3/api/v1/Import/([^/]+)/removeDuplicates()()()()()()()|/latest/EspoCRM\\-7\\.4\\.3/api/v1/Import/([^/]+)/unmarkDuplicates()()()()()()()())$~',
        'routeMap' => 
        array (
          2 => 
          array (
            0 => 'route8',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          3 => 
          array (
            0 => 'route19',
            1 => 
            array (
              'apiKey' => 'apiKey',
            ),
          ),
          4 => 
          array (
            0 => 'route21',
            1 => 
            array (
              'controller' => 'controller',
              'action' => 'action',
            ),
          ),
          5 => 
          array (
            0 => 'route31',
            1 => 
            array (
              'scope' => 'scope',
            ),
          ),
          6 => 
          array (
            0 => 'route40',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          7 => 
          array (
            0 => 'route43',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          8 => 
          array (
            0 => 'route46',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          9 => 
          array (
            0 => 'route47',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          10 => 
          array (
            0 => 'route48',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
        ),
      ),
      1 => 
      array (
        'regex' => '~^(?|/latest/EspoCRM\\-7\\.4\\.3/api/v1/Import/([^/]+)/exportErrors|/latest/EspoCRM\\-7\\.4\\.3/api/v1/Attachment/chunk/([^/]+)()|/latest/EspoCRM\\-7\\.4\\.3/api/v1/Attachment/copy/([^/]+)()()|/latest/EspoCRM\\-7\\.4\\.3/api/v1/EmailTemplate/([^/]+)/prepare()()()|/latest/EspoCRM\\-7\\.4\\.3/api/v1/Email/([^/]+)/attachments/copy()()()()|/latest/EspoCRM\\-7\\.4\\.3/api/v1/Email/inbox/folders/([^/]+)()()()()()|/latest/EspoCRM\\-7\\.4\\.3/api/v1/([^/]+)()()()()()()|/latest/EspoCRM\\-7\\.4\\.3/api/v1/([^/]+)/([^/]+)/([^/]+)()()()()())$~',
        'routeMap' => 
        array (
          2 => 
          array (
            0 => 'route49',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          3 => 
          array (
            0 => 'route53',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          4 => 
          array (
            0 => 'route55',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          5 => 
          array (
            0 => 'route56',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          6 => 
          array (
            0 => 'route57',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          7 => 
          array (
            0 => 'route65',
            1 => 
            array (
              'folderId' => 'folderId',
            ),
          ),
          8 => 
          array (
            0 => 'route80',
            1 => 
            array (
              'controller' => 'controller',
            ),
          ),
          9 => 
          array (
            0 => 'route89',
            1 => 
            array (
              'controller' => 'controller',
              'id' => 'id',
              'link' => 'link',
            ),
          ),
        ),
      ),
    ),
    'OPTIONS' => 
    array (
      0 => 
      array (
        'regex' => '~^(?|/latest/EspoCRM\\-7\\.4\\.3/api/v1/LeadCapture/([^/]+))$~',
        'routeMap' => 
        array (
          2 => 
          array (
            0 => 'route20',
            1 => 
            array (
              'apiKey' => 'apiKey',
            ),
          ),
        ),
      ),
    ),
    'PUT' => 
    array (
      0 => 
      array (
        'regex' => '~^(?|/latest/EspoCRM\\-7\\.4\\.3/api/v1/([^/]+)/action/([^/]+)|/latest/EspoCRM\\-7\\.4\\.3/api/v1/([^/]+)/layout/([^/]+)()|/latest/EspoCRM\\-7\\.4\\.3/api/v1/([^/]+)/layout/([^/]+)/([^/]+)()|/latest/EspoCRM\\-7\\.4\\.3/api/v1/Admin/fieldManager/([^/]+)/([^/]+)()()()|/latest/EspoCRM\\-7\\.4\\.3/api/v1/([^/]+)/([^/]+)()()()()|/latest/EspoCRM\\-7\\.4\\.3/api/v1/([^/]+)/([^/]+)/subscription()()()()())$~',
        'routeMap' => 
        array (
          3 => 
          array (
            0 => 'route22',
            1 => 
            array (
              'controller' => 'controller',
              'action' => 'action',
            ),
          ),
          4 => 
          array (
            0 => 'route25',
            1 => 
            array (
              'controller' => 'controller',
              'name' => 'name',
            ),
          ),
          5 => 
          array (
            0 => 'route26',
            1 => 
            array (
              'controller' => 'controller',
              'name' => 'name',
              'setId' => 'setId',
            ),
          ),
          6 => 
          array (
            0 => 'route32',
            1 => 
            array (
              'scope' => 'scope',
              'name' => 'name',
            ),
          ),
          7 => 
          array (
            0 => 'route81',
            1 => 
            array (
              'controller' => 'controller',
              'id' => 'id',
            ),
          ),
          8 => 
          array (
            0 => 'route86',
            1 => 
            array (
              'controller' => 'controller',
              'id' => 'id',
            ),
          ),
        ),
      ),
    ),
    'PATCH' => 
    array (
      0 => 
      array (
        'regex' => '~^(?|/latest/EspoCRM\\-7\\.4\\.3/api/v1/Admin/fieldManager/([^/]+)/([^/]+)|/latest/EspoCRM\\-7\\.4\\.3/api/v1/([^/]+)/([^/]+)())$~',
        'routeMap' => 
        array (
          3 => 
          array (
            0 => 'route33',
            1 => 
            array (
              'scope' => 'scope',
              'name' => 'name',
            ),
          ),
          4 => 
          array (
            0 => 'route82',
            1 => 
            array (
              'controller' => 'controller',
              'id' => 'id',
            ),
          ),
        ),
      ),
    ),
    'DELETE' => 
    array (
      0 => 
      array (
        'regex' => '~^(?|/latest/EspoCRM\\-7\\.4\\.3/api/v1/Admin/fieldManager/([^/]+)/([^/]+)|/latest/EspoCRM\\-7\\.4\\.3/api/v1/([^/]+)/([^/]+)()|/latest/EspoCRM\\-7\\.4\\.3/api/v1/([^/]+)/([^/]+)/subscription()()|/latest/EspoCRM\\-7\\.4\\.3/api/v1/([^/]+)/([^/]+)/([^/]+)()())$~',
        'routeMap' => 
        array (
          3 => 
          array (
            0 => 'route34',
            1 => 
            array (
              'scope' => 'scope',
              'name' => 'name',
            ),
          ),
          4 => 
          array (
            0 => 'route83',
            1 => 
            array (
              'controller' => 'controller',
              'id' => 'id',
            ),
          ),
          5 => 
          array (
            0 => 'route87',
            1 => 
            array (
              'controller' => 'controller',
              'id' => 'id',
            ),
          ),
          6 => 
          array (
            0 => 'route90',
            1 => 
            array (
              'controller' => 'controller',
              'id' => 'id',
              'link' => 'link',
            ),
          ),
        ),
      ),
    ),
  ),
);