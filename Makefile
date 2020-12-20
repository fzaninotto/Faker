.PHONY: help
help:
	@grep -E '^[a-zA-Z0-9_-]+:.*?## .*$$' $(MAKEFILE_LIST) | sort | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[36m%-30s\033[0m %s\n", $$1, $$2}'

.PHONY: build
build: cs test static ## Runs test targets

.PHONY: cs
cs: vendor/autoload.php ## Fixes coding standard issues with php-cs-fixer
	vendor/bin/php-cs-fixer fix --diff --diff-format=udiff --verbose

.PHONY: coverage
coverage: vendor/autoload.php ## Collects coverage with phpunit
	vendor/bin/phpunit --coverage-text --coverage-clover=.build/logs/clover.xml

.PHONY: test
test: vendor/autoload.php ## Runs tests with phpunit
	vendor/bin/phpunit

.PHONY: static
static: vendor/autoload.php ## Runs static analyzers
	vendor/bin/phpstan analyze
	vendor/bin/psalm

.PHONY: baseline
baseline: vendor/autoload.php ## Generate baseline files
	vendor/bin/phpstan analyze --generate-baseline
	vendor/bin/psalm --update-baseline

.PHONY: clean
clean: rm -rf vendor composer.lock .build  ## Cleans up build and vendor files

vendor/autoload.php:
	composer update --no-interaction
	composer bin all install --no-interaction
