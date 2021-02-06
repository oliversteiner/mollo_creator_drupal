# Mollo Creator Drupal

Version 0.1.0 alpha

## Drupal Backend Module for Mollo Creator Admin Interface
Mollo Creator is my dream of a easy-to-use Drupal admin interface for Content Creators.
The goal is a desktop-app-like tool for Content Creators.
I am going to integrate and unify all the different frontends from my Drupal Modules in this one.
R.I.P jQuery and CKE. TypeScript and Vue is coming.

## Mollo Creator
- Admin Interface for Content Creators.
- It will NOT be a Layout Designer.
- https://github.com/oliversteiner/mollo-creator


### This module is used to...
- Hosting the JS Library of Mollo Creator
- A possibility for syncing formats and styles of your site for the wysiwyg editor
- Provide a settings page for Creator / graphQL
- A generator for including other Modules to the Creator



### Features for Devs
- Add every Entity Type to Creator Gui via your_module.creator.yml and graphQL schema
- add own Widgets for Creator via vue components
- A View Display who syncs with the Creator List Panel
- A Display mode who syncs with the Creator Edit Panel

### Features for Content Creators
- a fast and clear admin interface for all your content.
- a standalone app. Edit your content in the app, preview in the browser.

### Technics
- graphQL
- Vue 3 / Typescript
- Quasar
- TipTap Wysiwyg Creator (or for beginning simply the one from Quasar)
- Electron

### Dependencies
- mollo_basic
- mollo_utils
- drupal/graphql

### Resources
Mollo Creator
- https://github.com/oliversteiner/mollo-creator

Generates Typescript type definitions for certain entities
 - https://github.com/hoppinger/ts_generator

Drupal GraphQL
- https://drupal.org/project/graphql
  https://drupal.org/project/preview_graphql

Quasar
- https://quasar.dev/

Security
- https://carvesystems.com/news/the-5-most-common-graphql-security-vulnerabilities/

Graphql server authentication with JWT
- https://dev.to/ahmdtalat/graphql-server-authentication-with-jwt-3mdi

TipTap
- https://tiptap.dev/
- https://github.com/donotebase/quasar-tiptap

Drupal Admin UI (react)
https://github.com/jsdrupal/drupal-admin-ui

Other
- https://www.drupal.org/about/strategic-initiatives/admin-ui-js
- https://www.lullabot.com/articles/drupal-javascript-initiative-the-road-to-a-modern-administration-ui
- https://www.drupal.org/project/ideas/issues/3017785

