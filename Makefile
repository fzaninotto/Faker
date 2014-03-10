vendor/autoload.php:
	composer install

.PHONY: sniff
sniff: vendor/autoload.php
	vendor/bin/phpcs --standard=PSR2 src -n

.PHONY: test
test: vendor/autoload.php
	vendor/bin/phpunit
