docker-build-image:
	docker build -t instapro-exercise .

docker-copy-dependencies:
	docker run -ti --rm -v $(PWD)/vendor\:/tmp instapro-exercise /bin/sh -c "cp -rf vendor/* /tmp"

docker-run-tests:
	docker run -ti --rm -v $(PWD)/src\:/var/www/src -v $(PWD)/tests\:/var/www/tests instapro-exercise vendor/bin/phpunit -c phpunit.dist.xml

docker-run-cs-fixer:
	docker run -ti --rm -v $(PWD)/src\:/var/www/src -v $(PWD)/tests\:/var/www/tests instapro-exercise vendor/bin/php-cs-fixer fix --verbose --cache-file=/tmp/.php_cs.cache

docker-run-app:
	docker run -ti --rm -v $(PWD)/src\:/var/www/src -v $(PWD)/tests\:/var/www/tests instapro-exercise src/app.php



php-install-dependencies:
	wget http://getcomposer.org/composer.phar -O composer.phar
	php composer.phar install
	rm composer.phar

php-run-tests:
	vendor/bin/phpunit -c phpunit.dist.xml

php-run-cs-fixer:
	vendor/bin/php-cs-fixer fix --verbose

php-run-app:
	src/app.php
