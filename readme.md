# Laravel Vue Multi-Page
This is an example Laravel/Vue setup that is utilizing a multi-page approach with blade templates. I
use webpack to compile assets and utilize its many optimizations and features such as lazy-loading the
Vue components. Setting up the front end code this way allows us to optimize the sites front end code and
keep it organized and maintainable.

## Purpose

The goal here is to provide some boilerplate code and configurations that can be used to setup a new
app or drop into an existing Laravel multi-page application. I put this together for use in pre Laravel 5.3 apps but
it can easily be used in place of Laravel Mix in 5.3+ apps.

The key is that this is for a multi-page architecture utilizing blade templates and Laravel's routing while still
implementing modern javascript technologies and features. This was built to have the key pieces dropped into an existing Laravel
app that is not currently using a JS framework.

## App Structure

The app is a standard Laravel setup utilizing blade templates. The front end consists of the vendor file
that holds all of our vendor code, the main app file that serves as our entry point and creates our root Vue instance,
and then pages and components.

### Pages

Pages serve as the root component for a view and are setup to be lazy-loaded when that view is navigated to.
There are basically two ways you can structure and setup a page and a view. Either a split setup where
you have some of the content in the blade template and some in the page component or, as I prefer, keep all markup
inside the page component and the blade template consists of just the page component tag.

### Components

Components are reusable child components that are imported into the page components. These components are
usually built for specific purposes like making a data table or creating a drop down menu.

## Usage

In the case of an existing laravel app with no js framework and not currently utilizing the package.json, the following
is what you need:

+ .bablerc
+ package.json
+ webpack.config.js
+ webpack.helper.js
+ postcss.config.js
+ resources/assets/**

Add those files to your app in the same place they exist in this repo, do not place them anywhere else or they will not work.
Refer to the layouts.app blade template for an example of how to use the assets built by webpack.