vendor/autoload.php:
	composer install --no-interaction --prefer-dist

.PHONY: fix
fix: vendor/autoload.php
	vendor/bin/phpcbf --standard=PSR2 src

.PHONY: sniff
sniff: vendor/autoload.php
	vendor/bin/phpcs --standard=PSR2 src -n

.PHONY: test
test: vendor/autoload.php
	vendor/bin/phpunit --verbose
