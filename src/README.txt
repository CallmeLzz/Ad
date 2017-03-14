1, Open composer.json:
	"autoload": {
        "psr-4": {
            "Source\\Ad\\": "vendor/source/ad/src/"
        }
    },
2, Open config/app.php
	"Source\Ad\AdServiceProvider::class"
3, Run "composer dump-autoload"
4, Run "php artisan vendor:publish --tag=public --force"

/*========================================*/
Add Laravel Collective
Source: https://laravelcollective.com/docs/5.3/html

1, Begin by installing this package through Composer. Run the following from the terminal:
	composer require "laravelcollective/html":"^5.3.0"
2, Next, add your new provider to the providers array of config/app.php:
	'providers' => [
	    // ...
	    Collective\Html\HtmlServiceProvider::class,
	    // ...
  	],
3, Finally, add two class aliases to the aliases array of config/app.php:
	'aliases' => [
	    // ...
	      'Form' => Collective\Html\FormFacade::class,
	      'Html' => Collective\Html\HtmlFacade::class,
	    // ...
	  ],

/*========================================*/
Add Send Mail

Open .env
MAIL_DRIVER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=lersureresort@gmail.com
MAIL_PASSWORD=hikarinomai
MAIL_ENCRYPTION=tls