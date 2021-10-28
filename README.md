## **Watch n Learn** Learning Management System

[![Build Status](https://travis-ci.org/andela-cganga/watch-n-learn.svg?branch=staging)](https://travis-ci.org/andela-cganga/watch-n-learn)
[![Coverage Status](https://coveralls.io/repos/github/andela-cganga/watch-n-learn/badge.svg?branch=staging)](https://coveralls.io/github/andela-cganga/watch-n-learn?branch=staging)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/andela-cganga/watch-n-learn/badges/quality-score.png?b=staging)](https://scrutinizer-ci.com/g/andela-cganga/watch-n-learn/?branch=staging)

A Learning Management System that helps people learn various technologies through videos from youtube.

To see the live version, head over to [Watch n Learn](https://watch-n-learn-staging.herokuapp.com/).
iludsfhaso;if   dkn;aosifjsaifj io  klj hjklkj  oiygedlkfhvakdsf
sdg
sfhg
hg
gfhdjhwr
tjmu
mne
trb
vf
    e'
    wdsd
        qcw vw
        w   w
        v
            weve    
                we
                wv


                        v

                            w
                            w   e
                            ve
                            w
                            vw
                            qev
                                w
                                v
                                    w
                                    v   
                                    v
                                    w   v
                                        wev
                                        w   
                                        evw
                                            wvwe
                                                wev
### Features
##### 1. Create an account
You can create an account, either through a registration form, or use OAuth:- either twitter, facebook or github. This allows you to have a dashboard.

##### 2. Upload, edit and delete the videos
Once you have an account, then head over to your dashboard under the upload section and upload videos. Only valid youtube urls are allowed, so don't poke the bear.

You are also able to edit, and delete videos that you have uploaded.

##### 3. View videos other users have uploaded
When you go to the landing page of the aplication, a list of videos uploaded by other users is listed. You can scroll through to see the various videos you might be interested in.

##### 4. Favorite videos you find interesting
Clicking on a video, takes you to it's page. There you can favorite a video by clicking on :heart:. Favoriting videos places them in your favorites section of your dashboard. (Accessible at the top right of the application).

##### 5. Comment on videos
You can comment on videos that you are watching, and consequently have a review or discussion with others who have also watched the video.

##### 6. View other people's profiles.
You can alse view other people's profiles, and browse through the videos they have uploaded and favorited. This is accessible on video pages, where the owner of the video is placed just beside the title. User profiles are also accessible through the video comments., by clicking on their names.


### Technologies used
1. [Laravel 5.2](https://laravel.com/)
2. [Materialize CSS](http://materializecss.com/)
3. [Postgres SQL](http://www.postgresql.org/)

A list of open source laravel packages used can be see in the [composer.json](https://github.com/andela-cganga/watch-n-learn/blob/staging/composer.json).


### Set up Locally
Make sure you have the requirements for laravel setup. If not, read the [Laravel Installation Guide](https://laravel.com/docs/5.2)

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

The Watch n Learn project is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)


Made with :heart: by [Ganga Christopher](https://github.com/andela-cganga)