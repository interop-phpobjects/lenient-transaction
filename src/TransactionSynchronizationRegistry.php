<?php
namespace Interop\Lenient\Transaction;

interface TransactionSynchronizationRegistry
{
	/** 
	*  Get an object from the Map of resources being managed for the transaction bound to the current thread at the time this method is called.
	*  @return Object
	*/
	public function getResource($key);

	/** 
	*  Get the rollbackOnly status of the transaction bound to the current thread at the time this method is called.
	*  @return boolean
	*/
	public function getRollbackOnly();

	/** 
	*  Return an opaque object to represent the transaction bound to the current thread at the time this method is called.
	*  @return Object
	*/
	public function getTransactionKey();

	/** 
	*  Return the status of the transaction bound to the current thread at the time this method is called.
	*  @return int
	*/
	public function getTransactionStatus();

	/** 
	*  Add or replace an object in the Map of resources being managed for the transaction bound to the current thread at the time this method is called.
	*  @return void
	*/
	public function putResource($key, $value) ;

	/** 
	*  Register a Synchronization instance with special ordering semantics.
	*  @return void
	*/
	public function registerInterposedSynchronization(/*SynchronizationInterface*/ $sync);

	/** 
	*  Set the rollbackOnly status of the transaction bound to the current thread at the time this method is called.
	*  @return void
	*/
	public function setRollbackOnly();
}