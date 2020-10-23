.PHONY: build fix help sniff static-code-analysis static-code-analysis-baseline test

help:
	@grep -E '^[a-zA-Z0-9_-]+:.*?## .*$$' $(MAKEFILE_LIST) | sort | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[36m%-30s\033[0m %s\n", $$1, $$2}'

build: fix test ## Runs fix and test targets

fix: vendor/autoload.php ## Fixes code style issues with phpcbf
	vendor/bin/phpcbf

sniff: vendor/autoload.php ## Detects code style issues with phpcs
	mkdir -p .build/php-codesniffer
	vendor/bin/phpcs --cache=.build/php-codesniffer/cache.json

static-code-analysis: vendor ## Runs a static code analysis with vimeo/psalm
	.phive/bin/psalm --config=psalm.xml --show-info=false --stats

static-code-analysis-baseline: vendor ## Generates a baseline for static code analysis with vimeo/psalm
	.phive/bin/psalm --config=psalm.xml --set-baseline=psalm-baseline.xml

test: vendor/autoload.php ## Runs tests with phpunit
	vendor/bin/phpunit --verbose

vendor/autoload.php:
	composer install --no-interaction
