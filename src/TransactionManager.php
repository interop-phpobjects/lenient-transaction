<?php
namespace Interop\Lenient\Transaction;

interface TransactionManager
{
    /** 
    *  Create a new transaction and associate it with the current thread.
    *  @return void
    */
    public function begin(/* TransactionDefinitionInterface */$definition=null);

    /** 
    *  Complete the transaction associated with the current thread.
    *  @return void
    */
    public function commit();

    /** 
    *  Roll back the transaction associated with the current thread.
    *  @return void
    */
    public function rollback();

    /** 
    *  Obtain the status of the transaction associated with the current thread.
    *  @return int
    */
    public function getStatus();

    /** 
    *  Obtain the status of the transaction is active.
    *  @return int
    */
    public function isActive();

    /** 
    *  Get the transaction object that represents the transaction context of the calling thread.
    *  @return Transaction
    */
    public function getTransaction();

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

    /** 
    *  Suspend the transaction currently associated with the calling thread and return a Transaction object that represents the transaction context being suspended.
    *  @return Transaction
    */
    public function suspend();

    /** 
    *  Resume the transaction context association of the calling thread with the transaction represented by the supplied Transaction object.
    *  @return void
    */
    public function resume(/*TransactionInterface*/ $tobj);
}