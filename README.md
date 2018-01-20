# nedcamp

This is the README for the New England Drupal Camp website.

### Server and workflow 

The site is hosted on Pantheon. You must have a Pantheon account and have that account added to this site to access the dashboard. 

Repo: git@github.com:NEDCampDev/nedcamp.git

On Pantheon sites, the master branch is used on the dev, test and live environments.

Dev:  http://dev-nedcamp.pantheonsite.io/  
user/pass to unlock is (ask). 

Normally there will also be a staging branch and environment, but at this time that are not setup yet.

Once everything is setup, normal workflow is shown below. See this Pantheon doc for more:  https://pantheon.io/docs/guides/build-tools/new-pr/ 

1. Create a feature branch off of master branch. You may want to give that branch your name.
2. Do work in that features branch.
3. When you like the work on local, push that branch `git push origin name` where `name` is the name of your branch.
4. Note this will automatically create or updates an environment on Pantheon:  http://name-nedcamp.pantheonsite.io  ...so you can check it out there also. 
5. On Github, do a pull request to pull your branch `name` into `master`. 
6. When the pull request is approved and merged it will deploy to the dev site:  http://dev-nedcamp.pantheonsite.io/

NOTE: I am not 100% sure about above, you may need to merge into dev via the Pantheon dashobard.

8. When ready, deploy from dev to test, then from test to live.  That is done via the Pantheon dashboard.

At this point, there is no test and live, we will be working just with dev, and with staging once that is setup. 

Note that the workflow uses CircleCI, so pushing to Github triggers a push to CircleCI then to Pantheon. 

### Set up the repository locally

1. Clone the repo.
2. cd into the folder you cloned into, and run `composer install`
3. Create a local database and import a dump from Pantheon dev into it (get that from the Dashboard).
4. Copy the `_docs/settings.local.php` to `/web/sites/default/settings.local.php` and adjust database name, user and password. 
5. The repo does not come with an .htaccess file becuase Pantheon uses NGINX so copy `_docs/.htaccess` to `/web/.htacess` if you run Apache locally.
5. The user/1 user/pass is in LastPass.




