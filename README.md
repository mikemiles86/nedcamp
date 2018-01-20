# nedcamp

This is the README for the New England Drupal Camp website.

### Server and workflow 

The site is hosted on Pantheon. 

Dashboard: https://dashboard.pantheon.io/sites/1e9ab33c-01d3-42bd-bb42-5008333172a3#dev/content/export

You must have a Pantheon account and have that account added to this site.

Repo: git@github.com:NEDCampDev/nedcamp.git

On Pantheon sites, the master branch is used on the dev, test and live environments.

Dev:  http://dev-nedcamp.pantheonsite.io/  
user/pass to unlock is nedcamp/nedcamp

Normally there will also be a staging branch and environment, but at this time that are not setup yet.

Once everything is setup, normal workflow is:

1. Create a feature branch off of master branch.
2. Do work in that features branch.
3. When ready, merge festure branch into staging branch.
4. Push staging branch (git push origin staging) to deploy to staging environment. 
5. QA on staging environment.
6. When ready, merge the feature branch into master.
7. Push master branch (git push origin master) to deploy to dev environment. 
8. When ready, deploy from dev to test, then from test to live.  That is done via the Pantheon dashboard.

NOTE: above may be changed to do more of a pull request type of workflow in Github. 

At this point, there is no test and live, we will be working just with dev, and with staging once that is setup. 

Note that the workflow uses CircleCI, so pushing to Github triggers a push to CircleCI then to Pantheon. 

### Set up the repository locally

1. Clone the repo.
2. cd into the folder you cloned into, and run `composer install`
3. Create a local database and import a dump from Pantheon dev into it (get that from the Dashboard).
4. Copy the `_docs/settings.local.php` to `/web/sites/default/settings.local.php` and adjust database name, user and password. 
5. The repo does not come with an .htaccess file becuase Pantheon uses NGINX so copy `_docs/.htaccess` to `/web/.htacess` if you run Apache locally.
5. The user/1 user/pass is in LastPass.




