## About NEDCamp Classy

NEDCamp Classy is a sub theme of Classy.

## Installation

- Make sure you have npm (node package manager) installed by running this command in this theme folder:  `npm -v`.  If you do not have npm installed, go here: https://www.npmjs.com/get-npm

- Then run `npm install` in this theme folder. This will install a bunch of dependencies and will create a `node_modules` folder in your theme. That folder is in the `.gitignore` for this theme as it is only needed locally for development. 

If you see an error at the end it `npm install`, such as `npm WARN cmi@8.1.0 No repository field`, don't worry about that.  So long as running the `gulp` command works, you are all set. 

## Usage

Now you can run these commands from inside the theme folder: 

```
gulp
gulp sass
gulp watch
gulp clearcache
gulp reload
etc...

```
You will probably mainly run

```
gulp watch

```
while developing, so that css is compiled whenever a sass file change is made. 

Look inside the gulpfile.js to see what the commands do. You can alter what runs with the gulp command default by editing the bottom link `(gulp.task(‘default”…)`.  

The `gulfile.js` loads `gulpconfig.js` which includes info on where sass and css files are located.







