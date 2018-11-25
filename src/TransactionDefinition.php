<?php
namespace Interop\Lenient\Transaction;

interface TransactionDefinition
{
    const ISOLATION_DEFAULT          = -1;
    const ISOLATION_READ_UNCOMMITTED = 1;
    const ISOLATION_READ_COMMITTED   = 2;
    const ISOLATION_REPEATABLE_READ  = 3;
    const ISOLATION_SERIALIZABLE     = 4;

    const PROPAGATION_MANDATORY      = 1;
    const PROPAGATION_NESTED         = 2;
    const PROPAGATION_NEVER          = 3;
    const PROPAGATION_NOT_SUPPORTED  = 4;
    const PROPAGATION_REQUIRED       = 5;
    const PROPAGATION_REQUIRES_NEW   = 6;
    const PROPAGATION_SUPPORTS       = 7;

    const TIMEOUT_DEFAULT            = -1;

    /**
    * @return int      Return the isolation level.
    */
    public function getIsolationLevel();

    /**
    * @return String   Return the name of this transaction. 
    */
    public function getName();

    /**
    * @return int      Return the transaction timeout.
    */
    public function getTimeout();

    /**
    * @return boolean  Return whether to optimize as a read-only transaction.
    */
    public function isReadOnly();

    /**
    * @return boolean  Return optional definition of this transaction.
    */
    public function getOption($name);

    /**
    * @return boolean  Return list of optional definition of this transaction.
    */
    public function getOptions();
}