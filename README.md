# Banking exercise
>Deposit money onto my account 
>In order to save money
>As a bank client
>I want to make a deposit in my account


>Withdraw money from my account
>In order to retrieve some or all of my savings
>As a bank client
>I want to make a withdrawal from my account


>Check the history of my operations
>In order to check my operations
>As a bank client
>I want to see the history (operation, date, amount, balance) of my operations


>Example output
>Date                   || Credit    || Debit  || Balance
>2018-10-10 12:34:56    ||           || 500.00 || 2500.00
>2018-10-12 20:00:01    || 2000.00   ||        || 3000.00
>2018-10-15 10:15:00    || 1000.00   ||        || 1000.00

Testing nice but not mandatory

## Build the image
The container contains the source and test code. But we'll mount this
while running to make it faster to run tests after making changes.

The following command will build a docker images called *banking-exercise*
with PHP 7.2 and phpunit/phpunit 7.4 installed.
```
docker build -t banking-exercise .
```

## Copy dependencies to host for auto completion
```
docker run -ti --rm -v $PWD/vendor:/tmp banking-exercise /bin/sh -c "cp -rf vendor/* /tmp"
```

## Run the tests
In the root of the project run the following command.
```
docker run -ti --rm -v $PWD/tests:/var/www/tests -v $PWD/src:/var/www/src banking-exercise
```

This will run the previously build image *banking-exercise* and will execute
the phpunit tests. The source and test directory are mounted to the container.
This means that any change will be available in the container without building the
image again.
