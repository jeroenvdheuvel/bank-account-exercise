#!/usr/bin/env php
<?php

declare(strict_types=1);

use Instapro\Bank\Account;

require __DIR__ . '/../vendor/autoload.php';

$account = new Account();
$account->deposit();
$account->withdraw();
$account->printStatement();
