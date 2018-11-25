<?php
namespace Interop\Lenient\Transaction;

interface Synchronization
{
    /** 
    *  The beforeCompletion method is called by the transaction manager prior to the start of the two-phase transaction commit process.
    *  @return void
    */
    public function beforeCompletion();

    /** 
    *  This method is called by the transaction manager after the transaction is committed or rolled back.
    *  @param enum StatusInterface $status
    *  @return void
    */
    public function afterCompletion($status);
}