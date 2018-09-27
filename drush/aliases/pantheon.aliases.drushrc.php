<?php
  /**
   * Pantheon drush alias file, to be placed in your ~/.drush directory or the aliases
   * directory of your local Drush home. Once it's in place, clear drush cache:
   *
   * drush cc drush
   *
   * To see all your available aliases:
   *
   * drush sa
   *
   * See http://helpdesk.getpantheon.com/customer/portal/articles/411388 for details.
   */

  $aliases['nedcamp.dev'] = array(
    'uri' => 'dev-nedcamp.pantheonsite.io',
    'db-url' => 'mysql://pantheon:2940a75044914d579c1a4fbd35edb259@dbserver.dev.1e9ab33c-01d3-42bd-bb42-5008333172a3.drush.in:17167/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.dev.1e9ab33c-01d3-42bd-bb42-5008333172a3.drush.in',
    'remote-user' => 'dev.1e9ab33c-01d3-42bd-bb42-5008333172a3',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['nedcamp.ci-216'] = array(
    'uri' => 'ci-216-nedcamp.pantheonsite.io',
    'db-url' => 'mysql://pantheon:ff186cd059c54a1c856f8908136c4ecf@dbserver.ci-216.1e9ab33c-01d3-42bd-bb42-5008333172a3.drush.in:19298/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.ci-216.1e9ab33c-01d3-42bd-bb42-5008333172a3.drush.in',
    'remote-user' => 'ci-216.1e9ab33c-01d3-42bd-bb42-5008333172a3',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['nedcamp.test'] = array(
    'uri' => 'test-nedcamp.pantheonsite.io',
    'db-url' => 'mysql://pantheon:b6ffad08f571478886e5d5e9a867acec@dbserver.test.1e9ab33c-01d3-42bd-bb42-5008333172a3.drush.in:15983/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.test.1e9ab33c-01d3-42bd-bb42-5008333172a3.drush.in',
    'remote-user' => 'test.1e9ab33c-01d3-42bd-bb42-5008333172a3',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['nedcamp.live'] = array(
    'uri' => 'live-nedcamp.pantheonsite.io',
    'db-url' => 'mysql://pantheon:29a82b004bee47ef96a1a30e12caca71@dbserver.live.1e9ab33c-01d3-42bd-bb42-5008333172a3.drush.in:15905/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.live.1e9ab33c-01d3-42bd-bb42-5008333172a3.drush.in',
    'remote-user' => 'live.1e9ab33c-01d3-42bd-bb42-5008333172a3',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['nedcamp.ci-213'] = array(
    'uri' => 'ci-213-nedcamp.pantheonsite.io',
    'db-url' => 'mysql://pantheon:9ae3019706084a299141bd1651c0f133@dbserver.ci-213.1e9ab33c-01d3-42bd-bb42-5008333172a3.drush.in:17733/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.ci-213.1e9ab33c-01d3-42bd-bb42-5008333172a3.drush.in',
    'remote-user' => 'ci-213.1e9ab33c-01d3-42bd-bb42-5008333172a3',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['nedcamp.ci-217'] = array(
    'uri' => 'ci-217-nedcamp.pantheonsite.io',
    'db-url' => 'mysql://pantheon:e5cf7393cd604206a5a1263807c9535f@dbserver.ci-217.1e9ab33c-01d3-42bd-bb42-5008333172a3.drush.in:15553/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.ci-217.1e9ab33c-01d3-42bd-bb42-5008333172a3.drush.in',
    'remote-user' => 'ci-217.1e9ab33c-01d3-42bd-bb42-5008333172a3',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'files',
      '%drush-script' => 'drush',
     ),
  );
