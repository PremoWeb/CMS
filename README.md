# CMS
A very capable, no bloat content management system extending Fat Free Framework

ACTIVELY UNDER DEVELOPMENT. NOT FOR PRODUCTION.

This monorepo includes the "application" and the "library". The application is a demo for development that doubles as the documentation website. This is also where I plan to handle unit testing in the future.

Project dependencies are added to the root composer.json. Running `composer update` will syncronize the depdencies to the application.

It's recommended to use the built-in PHP development server using `php -S localhost application/public/index.php`.

This project includes a Dockerfile that can be adopted for your project needs, but in this repo, it's used to deploy the demo application into production, so please don't touch this file. PR's with changes to this file are likely to be ignored or dismissed.

The roadmap:

PremoWeb CMS is being adapted from Bigfoot CMS, a project I built years ago. It's used to run a bunch of websites and has done so flawlessly for more than a decade. The goal of the new CMS is to standardize an API for managing users, content and other functions of the system and build a seperate UI that can be conditionally added to your website.

Once a standardized API is built, it will be the model for other systems such as Go. A single Svelte-based UI will you manage your websites that implement the API. You do not even need the CMS. You just need to implement the API into whatever system you wish to use.

The end-goal includes a cross-browser extention that can be used to let you manage any websites that implements the PremoWeb CMS API, regardless if the system uses the CMS or not.