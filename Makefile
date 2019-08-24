.PHONY: fix sniff test

vendor/autoload.php:
	composer install --no-interaction --prefer-dist

fix: vendor/autoload.php
	vendor/bin/phpcbf --standard=PSR2 src

sniff: vendor/autoload.php
	vendor/bin/phpcs --standard=PSR2 src -n

test: vendor/autoload.php
	vendor/bin/phpunit --verbose
