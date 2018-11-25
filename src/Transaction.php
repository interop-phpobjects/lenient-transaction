<?php
namespace Interop\Lenient\Transaction;

interface Transaction
{
    /** 
    *  Enlist the resource specified with the transaction associated with the target Transaction object.
    *  @return int
    */
    public function enlistResource(/*XAResourceInterface*/ $xaRes);

    /** 
    *  Disassociate the resource specified from the transaction associated with the target Transaction object.
    *  @return int
    */
    public function delistResource(/*XAResourceInterface*/ $xaRes, $flag);

    /** 
    *  Complete the transaction represented by this Transaction object.
    *  @return void
    */
    public function commit();

    /** 
    *  Obtain the status of the transaction associated with the target Transaction object.
    *  @return int
    */
    public function getStatus();

    /** 
    *  Register a synchronization object for the transaction currently associated with the target object.
    *  @return void
    */
    public function registerSynchronization(/*SynchronizationInterface*/ $sync);

    /** 
    *  Rollback the transaction represented by this Transaction object.
    *  @return void
    */
    public function rollback();

    /** 
    *  Modify the transaction associated with the target object such that the only possible outcome of the transaction is to roll back the transaction.
    *  @return void
    */
    public function setRollbackOnly();
}