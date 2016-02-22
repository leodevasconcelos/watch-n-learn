## **Watch n Learn** Learning Management System

[![Build Status](https://travis-ci.org/andela-cganga/watch-n-learn.svg?branch=staging)](https://travis-ci.org/andela-cganga/watch-n-learn)
[![Coverage Status](https://coveralls.io/repos/github/andela-cganga/watch-n-learn/badge.svg?branch=staging)](https://coveralls.io/github/andela-cganga/watch-n-learn?branch=staging)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/andela-cganga/watch-n-learn/badges/quality-score.png?b=staging)](https://scrutinizer-ci.com/g/andela-cganga/watch-n-learn/?branch=staging)

A Learning Management System that helps people learn various technologies through videos from youtube.

To see the live version, head over to [Watch n Learn](https://watch-n-learn-staging.herokuapp.com/).

### Set up Locally
Make sure you have the requirements for laravel setup. If not, [Laravel Installation Guide](https://laravel.com/docs/5.2)

Clone this repo
```bash
$ git clone https://github.com/andela-cganga/watch-n-learn.git
```
Go into the **watch-n-earn** folder
```bash
$ cd watch-n-learn
```
Copy the **env.example** file into a **.env** and fill out the followign fields.
```text
APP_ENV=local
APP_DEBUG=true
APP_KEY=*your-app-key*

DB_HOST=localhost
DB_DATABASE=*your-db*
DB_USERNAME=*your-db-username*
DB_PASSWORD=*your-password*

CACHE_DRIVER=file
SESSION_DRIVER=file

FACEBOOK_ID=
FACEBOOK_SECRET=
FACEBOOK_URL=

GITHUB_ID=
GITHUB_SECRET=
GITHUB_URL=

TWITTER_ID=
TWITTER_SECRET=
TWITTER_URL=

CLOUDINARY_API_KEY=
CLOUDINARY_API_SECRET=
CLOUDINARY_CLOUD_NAME=
CLOUDINARY_URL=

```

Once you have all these set up, run composer, to install dependencies and run migrations.
```bash
$ composer install
```

If you set up this in you local environment, run
```bash
$ php artisan serve
```

If you used vagrant / Homestead, head over to where your Hosts point to.

To test this project, simply run
```bash
$ vendor/bin/phpunit
```

### License

The TechLMS project is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)


Made with :heart: by [Ganga Christopher](https://github.com/andela-cganga)