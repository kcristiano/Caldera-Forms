Caldera-Forms
=============
## This is forked from [CalderaWP- Github](https://github.com/calderawp/Caldera-Forms/) in order to maintain moving forward - 10 June 2022

### Install for development
Requires: git, yarn, Grunt.
- Clone repo to plugin directory
    - `git clone git@lab.civicrm.org:extensions/caldera-civicrm/caldera-forms.git`
- Switch directory
    - `cd caldera-forms.git`
- If you are using your own local development environment:
    - `yarn i && composer install`
- If you are wish to use [the provided local development environment](./contributing/local-dev.md)
    - `composer dev:install`

### Build For Release
To create a build to ship to WordPress.org:
`yarn package`

This creates `/build/<version>` where `<version>` is the current version set in `package.json`. This creates a directory you can ZIP up for testing or whatever.

### JavaScript Development
[See automated testing docs for more information on directory structure, in regards to JavaScript test files]()

Run watcher for development to auto-compile JavaScript and CSS.

#### `/clients/`
This is the new stuff, built with webpack. Eventually everything UI will be here.

* Clients:
    * pro - The Caldera Forms Pro admin page and tab in the editor.
    * blocks - The Gutenberg block(s).
    * admin - The main admin page. Work in progress, not used in plugin.
    * viewer - The entry viewer. Work not in progress, not used in plugin.
    * editor - Theoretical.



#### `/assets/`
This is the old stuff, built with grunt.

* Build for development and start watcher.
    - `yarn dev:grunt`
* Build for production
    -  `yarn build:legacy`

#### CLI Commands
##### Composer
* `composer test:php` - Run PHP tests -- isolated unit tests and the WordPress integration tests.
* `composer dev:install` - Installs dependencies, Docker-based test environment and sets up test forms.
* `composer dev:destroy` - Deletes dependencies and the Docker-based test environment.
* `composer wp:install` - Installs Docker-based test environment.
* `composer wp:start` - Starts Docker-based test environment and echos the server's url.
* `composer wp:server-start` - Starts Docker-based test environment.
* `composer wp:server-url` - Echos the Docker-based test environment's server url.
* `composer wp:activate` - Activate plugins in Docker-based environment.
* `composer wp:tests` - Runs the PHP integration tests using phpunit inside Docker-based environment.
* `composer wp:stop` - Stops Docker-based test environment, without destroying containers.
* `composer wp:destroy` - Removes (including the database) the test environment and destroys containers.
* `composer test:unit` - Run php unit tests.
* `composer test:setup` - Adds test forms and puts them on pages.
* `composer test:delete` - Delete test forms and pages the are on.
* `composer nuke` - Deletes dependencies, including lock files --yarn and Composer.

##### yarn
* `yarn test` - Run JavaScript test watcher
* `yarn build` - Build all JavaScript and CSS for production
* `yarn build:blocks` - Build blocks JavaScript and CSS for production
* `yarn build:clients` - Build other JavaScript and CSS for production.
* `yarn start` - Start dev server for clients that are not blocks and run watcher.
* `yarn start:blocks` - Start dev server for blocks and run watcher.
* `yarn start:clients` - Start dev server for other clients and run watcher.
* `yarn test:once` - Run JavaScript unit tests once
* `yarn test:e2e` - Start Cypress e2e test runner.
* `yarn test:e2e:ci` - Trigger Cypress.io test record.

### Release To WordPress.org
##### Requires
* [svn](https://subversion.apache.org/quick-start#installing-the-client)
* [yarn](https://yarnpkg.com/en/) - Please use Yarn, not npm.
* Grunt `npm install -g grunt-cli`
* In Progress

#### Steps
* Build release file
    - `yarn package`

#### Notes
* In progress
