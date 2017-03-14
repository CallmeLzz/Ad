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