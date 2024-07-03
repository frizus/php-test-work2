install-libs:
	composer install

update-libs:
	composer update

install-composer-scripts:
	composer run-script post-root-package-install
	composer run-script post-update-cmd # возможно, закомментировать
	composer run-script post-create-project-cmd

db-seed:
	php artisan db:seed

reset-db:
	php artisan migrate:refresh

test:
	php artisan test

rerun-db: reset-db db-seed

install: install-libs install-composer-scripts db-seed

setup: install

build: install

compile: install

.PHONY: test
