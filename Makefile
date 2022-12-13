.PHONY: build
build: cs static test ## Runs cs, static, and test targets

# https://www.gnu.org/software/make/manual/html_node/Force-Targets.html
always:

.PHONY: help
help:
	@grep -E '^[a-zA-Z0-9_-]+:.*?## .*$$' $(MAKEFILE_LIST) | sort | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[36m%-30s\033[0m %s\n", $$1, $$2}'

.PHONY: cs
cs: vendor ## Fixes coding standard issues with php-cs-fixer
	vendor/bin/php-cs-fixer fix --diff --verbose

.PHONY: coverage
coverage: vendor ## Collects coverage with phpunit
	vendor/bin/phpunit --coverage-text --coverage-clover=.build/logs/clover.xml

.PHONY: test
test: vendor ## Runs tests with phpunit
	vendor/bin/phpunit

.PHONY: rector
rector: vendor ## Runs rector
	vendor/bin/rector process test/ --config=rector-migrate.php --dry-run

.PHONY: static
static: vendor ## Runs static analyzers
	vendor/bin/phpstan
	vendor/bin/psalm

.PHONY: baseline
baseline: vendor ## Generate baseline files
	vendor/bin/phpstan --generate-baseline
	vendor/bin/psalm --set-baseline=psalm.baseline.xml

.PHONY: clean
clean:   ## Cleans up build and vendor files
	rm -rf vendor composer.lock .build

vendor: always
	composer update --no-interaction
	composer bin all install --no-interaction
