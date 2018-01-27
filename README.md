# NEDCamp

## Table of Contents
1. [About](#about)
1. [Services](#services)
    1. [Pantheon](#services-pantheon)
    1. [GitHub](#services-github)
    1. [CircleCi](#services-circle)
    1. [Trello](#services-trello)
    1. [Slack](#services-slack)
1. [Local Development](#local)
    1. [Requirements](#local-requirements)
    1. [Lando](#local-lando)
    1. [Docksal](#local-docksal)
1. [Development Workflow](#workflow)
    1. [Forking](#workflow-forks)
    1. [Branching](#workflow-branch)
    1. [Pull Requests](#workflow-pr)
    1. [Adding Modules](#workflow-modules)
    1. [Managing Configuration](#workflow-config)
1. [Site Management](#manage)
    1. [Admin Access](#manage-access)
    1. [Configuration](#manage-config)


## About<a name="about"></a>
This is the README for the New England Drupal Camp website. This document outlines the development process and maintenance for the NEDCamp 2018 rebuild.

## Services<a name="services"></a>
This section outlines the various services being used to build, host and manage the website.

### Pantheon<a name="services-pantheon"></a>
The site is hosted on Pantheon. You must have a Pantheon account and have that account added to this site to access the dashboard. On Pantheon sites, the master branch is used on the dev, test and live environments.

#### Sites
* **_DEV:_** [http://dev-nedcamp.pantheonsite.io](http://dev-nedcamp.pantheonsite.io)
* **_STAGE:_** _TBD_
* **_PROD:_** _PROD_


##### Restricted Access
Access to non-production sites require a username/password. Ask organizing committee for access.

### GitHub<a name="services-github"></a>
The codebase for this site is hosted on GitHub. The repository is owned by the "NEDCamp" github organization account.

[github.com/NEDCamp/nedcamp](https://github.com/NEDCamp/nedcamp)

### CircleCi<a name="services-circle"></a>
CircleCi is used as the continous integration service. CircleCi is responsible for keeping the Github and Pantheon repositories in sync.
#### Builds
CircleCi will trigger a build anytime a PR is merged into the GitHub repository.

### Trello<a name="services-trello"></a>
Trello is being used to track issues and work. Access to Trello board needs to be granted.

https://trello.com/b/8S3U6dNL/2018-website-rebuild

### Slack<a name="services-slack"></a>
There is a Slack channel for #NEDCamp in [drupalcamporganizers.slack.com](https://drupalcamporganizers.slack.com/)

## Local Development<a name="local"></a>
This section outlines the supported methods of local development.

### Requirements<a name="local-requirements"></a>
To perform local development requires having the following tools installed.
* [Composer](https://getcomposer.org/)
* [Git](https://git-scm.com/)

### Lando<a name="local-lando"></a>

Local development using Lando is supported.

#### Setup
1. Clone your [Forked repo](#workflow-fork)
1. cd into the folder you cloned into, and run `composer install`
1. [Install Lando](https://docs.devwithlando.io/installation/installing.html)
1. From within the folder that you cloned the repo into, run `lando start`
1. After it starts, run `lando info`
1. To get info about where the database is, which will look like this:
```
"database": {
    "type": "mariadb",
    "version": "10.0",
    "creds": {
      "user": "pantheon",
      "password": "pantheon",
      "database": "pantheon"
    },
    "internal_connection": {
      "host": "database",
      "port": 3306
    },
    "external_connection": {
      "host": "localhost",
      "port": "32770"
    },
    "config": {
      "confd": "/Users/rick/.lando/services/config/pantheon/mysql"
    }
  },  
```
1. To connect to the database with Sequel Pro (or similar use localhost), the creds as shown, and port 32770 (note yours may be different). 

#### Development
 * If you have been given access to the Pantheon dashboard, you should be able to run the command `lando pull`  It will ask you what site to pull from (probably will just list nedcamp) and whether you want to pull code (say no, you already have it) or database (say yes) or files (optional). 
 * After pulling the latest changes from github, be sure to run `composer install` before starting any new work, so that any new modules will be downloaded.

### Docksal<a name="local-docksal"></a>

Docksal is a docker based development environment. It is supported for local development.

#### Setup
1. Clone your [Forked repo](#workflow-forks)
1. [Install Docksal](https://docs.docksal.io/en/master/getting-started/setup/)
1. If you have Pantheon access, [download your Pantheon drush aliases](https://pantheon.io/docs/drush/) and place the file within the `/drush/aliases/` directory
1. From within the directory you cloned the repo into run `fin init`
1. Access your local site by going to [http://nedcamp.docksal](http://nedcamp.docksal)

#### Development
* Anytime you pull down from github you should re-run `fin init` as this will rebuild your local environment, downloading all composer dependencies, importing all existing configs and a copy of the database from Pantheon.
* The repo comes with a built in local drush alias file. Local development environment alias is `@local.nedcamp`
* To run drush commands, prefix your command with `fin` (this is the docksal command). Example: `fin drush @local.nedcamp status`

### Development Workflow<a name="workflow"></a>

This section outlines the various tools and methods that should be used for development.

#### Forking<a name="workflow-forks"></a>

All development work is done in forked branches of the [Github repository](#services-github). Review to this documentation for [how to create a fork on Github](https://help.github.com/articles/fork-a-repo/).

**<span style="color:red">NO ONE IS TO WORK/COMMIT DIRECTLY TO THE GITHUB OR PANTHEON REPOSITORIES**

#### Branching<a name="workflow-branch"></a>

Development is to be done on feature branches. When working on a feature or an issue (a.k.a a Trello ticket) create a new feature branch.

##### Branch Naming

Feature branches follow this naming convention: _feature/NC-XX_

Where:
* NC - Stands for "NEDCamp"
* XX - Is either the Trello card number, or a brief description (example: `feature/NC-README-UPDATE`)

#### Pull Requests<a name="workflow-pr"></a>
All completed development work will be submitted back to the upstream master repo using [Pull Requests](https://help.github.com/articles/about-pull-requests/).
* Only create a pull request for complete pieces of work.
* When creating a Pull Request prefix the pull request name match the feature name (example: NC-README-UPDATE: Updating the Readme file)
* Be sure to provide details within your pull request about the work you completed.

When a pull request is merged it will trigger a CircleCI build, which will handle getting the updates up to Pantheon.

#### Adding Modules<a name="workflow-modules"></a>
The NEDCamp codebase follows a composer workflow. No contrib modules are to be added to the git repository.

To add a new module follow these steps:
1. On the command line, navigate to the root project directory.
1. Use the `composer require` command to add a new module (example: `composer require drupal/pathauto`)

#### Managing configuration<a name="workflow-config"></a>
Before starting any new work it is always best to first import the current site configuration settings. This can be done by using Drush `drush cim`

If you make configuration changes, the new/updated config files need to be added to the git repository.  This is completed easiestly from the command line following these steps.
1. Using Drush export the config `drush cex` (confirm the updated config files are relevant to the changes you made)
1. Add the new config files to the git repo `git add config/`
1. Commit your changed.

## Site Management<a name="manage"></a>
This section outlines processes for managing the hosted sites.

### Admin Access<a name="manage-access"></a>

Access to the Administration account (user/1) is locked down. It can only be accessed by having Drush access to the Pantheon sites.  All organizers have their own separate accounts with the admin role assigned

A login url for the admin account can be generated with the following Drush command: `drush @pantheon.nedcamp.[env] uli`.


### Configuration<a name="manage-config"></a>
The CircleCi/Pantheon build process should handle updates to any config changes. However if config needs to be manually updated it can be done using the Drush command: `drush @pantheon.nedcamp.[env] cim`

All Pantheon environments are set to have config be read-only. This means they cannot write to the config directory, and config updates need to be done locally [following the outlined steps](#workflow-config).