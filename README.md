# Code quality exercise
Try to improve the code quality by applying one or more coding principles or object calisthenics. 

## Build the image
The container contains the source and test code. But we'll mount this
while running to make it faster to run tests after making changes.

The following command will build a docker images called *instapro-exercise*
with PHP 7.2 and phpunit/phpunit 7.4 installed.
```
docker build -t instapro-exercise .
```

## Copy dependencies to host for auto completion
```
docker run -ti --rm -v $PWD/vendor:/tmp instapro-exercise /bin/sh -c "cp -rf vendor/* /tmp"
```

## Run the tests
In the root of the project run the following command.
```
docker run -ti --rm -v $PWD/tests:/var/www/tests -v $PWD/src:/var/www/src instapro-exercise
```

This will run the previously build image *instapro-exercise* and will execute
the phpunit tests. The source and test directory are mounted to the container.
This means that any change will be available in the container without building the
image again.
