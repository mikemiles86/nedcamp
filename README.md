# nedcamp

This is the README for the New England Drupal Camp website.

### Set up the repository locally

The site is hosted on Pantheon. 
Dashboard: https://dashboard.pantheon.io/sites/1e9ab33c-01d3-42bd-bb42-5008333172a3#dev/content/export
(you must have a Pantheon account and have that account added to this site.

Repo: git@github.com:NEDCampDev/nedcamp.git

On Pantheon sites, the master branch is used on the dev, test and live environments.

Dev:  http://dev-nedcamp.pantheonsite.io/  
user/pass to unlock is nedcamp/nedcamp

Normally there will also be a staging branch and environment, but at this time those are not setup yet.

Once everythgin is setup, normaly workflow is:

1. Create a feature branch off of master branch.
2. Do work in that features branch.
3. When ready, merge festure branch into staging branch.
4. Push staging branch (git push origin staging) to deploy to staging environment. 
5. QA on staging environment.
6. When ready, merge the feature branch into master.
7. Push master branch (git push origin master) to deploy to dev environment. 
8. When ready, deploy from dev to test, then from test to live.  That is done via the Pantheon dsahsboard, 




### Set up the repository locally

