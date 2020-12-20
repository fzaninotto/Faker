.PHONY: build cs coverage help test

help:
	@grep -E '^[a-zA-Z0-9_-]+:.*?## .*$$' $(MAKEFILE_LIST) | sort | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[36m%-30s\033[0m %s\n", $$1, $$2}'

build: cs test static ## Runs test targets

cs: vendor/autoload.php ## Fixes coding standard issues with php-cs-fixer
	mkdir -p .build/
	vendor/bin/php-cs-fixer fix --diff --diff-format=udiff --verbose

coverage: vendor/autoload.php ## Collects coverage with phpunit
	vendor/bin/phpunit --coverage-text --coverage-clover=.build/logs/clover.xml

test: vendor/autoload.php ## Runs tests with phpunit
	vendor/bin/phpunit

static: vendor/autoload.php ## Runs static analyzers
	vendor/bin/phpstan analyze
	vendor/bin/psalm

baseline: vendor/autoload.php ## Generate baseline files
	vendor/bin/phpstan analyze --generate-baseline
	vendor/bin/psalm --update-baseline

clean: rm -rf vendor composer.lock .build  ## Cleans up build and vendor files

vendor/autoload.php:
	composer update --no-interaction
	composer bin all install --no-interaction
