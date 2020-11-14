.PHONY: build coverage help test

help:
	@grep -E '^[a-zA-Z0-9_-]+:.*?## .*$$' $(MAKEFILE_LIST) | sort | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[36m%-30s\033[0m %s\n", $$1, $$2}'

build: test static ## Runs test targets

coverage: vendor/autoload.php ## Collects coverage with phpunit
	vendor/bin/phpunit --coverage-text --coverage-clover=.build/logs/clover.xml

test: vendor/autoload.php ## Runs tests with phpunit
	vendor/bin/phpunit

static: vendor/autoload.php ## Runs static analyzers
	vendor/bin/phpstan analyze
	vendor/bin/psalm.phar

baseline: vendor/autoload.php ## Generate baseline files
	vendor/bin/phpstan analyze --generate-baseline
	vendor/bin/psalm.phar --update-baseline

clean: rm -rf vendor composer.lock .build  ## Cleans up build and vendor files

vendor/autoload.php:
	composer update --no-interaction
	composer bin all update --no-interaction
