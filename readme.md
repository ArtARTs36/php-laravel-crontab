## Installation

Run command: `composer require artarts36/laravel-crontab`

## Console Commands

| Command  | Description   |
| ------------ | ------------ |
| php artisan crontab:set  | Set your schedule laravel definitions into crontab configuration  |
| php artisan crontab:set --dry-run  | See how the crontab configuration might look like according to your laravel schedule   |
| php artisan crontab:list  | See actual crontab configuration  |


## Use on production

Add in your deploy script:
`php artisan crontab:set`
