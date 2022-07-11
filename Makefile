.PHONY: build coverage fix help sniff test

help:
	@grep -E '^[a-zA-Z0-9_-]+:.*?## .*$$' $(MAKEFILE_LIST) | sort | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[36m%-30s\033[0m %s\n", $$1, $$2}'

build: fix test ## Runs fix and test targets

coverage: vendor/autoload.php ## Collects coverage with phpunit
	vendor/bin/phpunit --coverage-text --coverage-clover=.build/logs/clover.xml

fix: vendor/autoload.php ## Fixes code style issues with phpcbf
	vendor/bin/phpcbf --standard=PSR2 src

sniff: vendor/autoload.php ## Detects code style issues with phpcs
	vendor/bin/phpcs --standard=PSR2 src -n

test: vendor/autoload.php ## Runs tests with phpunit
	vendor/bin/phpunit

vendor/autoload.php:
	composer install --no-interaction --prefer-dist
