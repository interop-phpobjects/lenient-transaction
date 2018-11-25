<?php
namespace Interop\Lenient\Transaction;

interface Status
{
    const STATUS_ACTIVE       = 0;
    const STATUS_MARKED_ROLLBACK = 1;
    const STATUS_PREPARED     = 2;
    const STATUS_COMMITTED    = 3;
    const STATUS_ROLLEDBACK   = 4;
    const STATUS_UNKNOWN      = 5;
    const STATUS_NO_TRANSACTION = 6;
    const STATUS_PREPARING    = 7;
    const STATUS_COMMITTING   = 8;
    const STATUS_ROLLING_BACK = 9;
}