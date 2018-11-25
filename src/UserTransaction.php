<?php
namespace Interop\Lenient\Transaction;

interface UserTransaction
{
    /** 
    *  Create a new transaction and associate it with the current thread.
    *  @return void
    */
    public function begin();

    /** 
    *  Complete the transaction associated with the current thread.
    *  @return void
    */
    public function commit();

    /** 
    *  Obtain the status of the transaction associated with the current thread.
    *  @return int
    */
    public function getStatus();

    /** 
    *  Roll back the transaction associated with the current thread.
    *  @return void
    */
    public function rollback();

    /** 
    *  Modify the transaction associated with the current thread such that the only possible outcome of the transaction is to roll back the transaction.
    *  @return void
    */
    public function setRollbackOnly();

    /** 
    *  Modify the timeout value that is associated with transactions started by the current thread with the begin method.
    *  @return void
    */
    public function setTransactionTimeout($seconds);
}