<?php

declare(strict_types=1);

namespace Instapro\Bank\Test;

use Instapro\Bank\Account;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 */
final class AccountTest extends TestCase
{
    /**
     * @test
     */
    public function withdraw(): void
    {
        $account = new Account();
        $account->withdraw();

        self::markTestIncomplete();
    }

    /**
     * @test
     */
    public function deposit(): void
    {
        $account = new Account();
        $account->deposit();

        self::markTestIncomplete();
    }

    /**
     * @test
     */
    public function printStatement(): void
    {
        $account = new Account();
        $account->printStatement();

        self::markTestIncomplete();
    }
}
