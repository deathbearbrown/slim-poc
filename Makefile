.PHONY: test
test: test-migrations test-style test-unit

.PHONY: test-migrations
test-migrations:
	php ./vendor/bin/phinx migrate -e testing

.PHONY: test-unit
test-unit:
	cd tests/ && TESTMODE=true ../vendor/bin/phpunit --debug

.PHONY: test-style
test-style:
	phpcs -p --standard=./ruleset.xml
