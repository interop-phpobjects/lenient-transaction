<?php
namespace Interop\Lenient\Transaction\Xa;

interface XAResource
{
    /*  Use TMNOFLAGS to indicate no flags value is selected. */
    const TMNOFLAGS    = 0;
    /*  Caller is joining existing transaction branch. */
    const TMJOIN       = 0x000200000;
    /*  Ends a recovery scan. */
    const TMENDRSCAN   = 0x000800000;
    /*  Starts a recovery scan. */
    const TMSTARTRSCAN = 0x001000000;
    /*  Caller is suspending (not ending) its association with a transaction branch.  */
    const TMSUSPEND    = 0x002000000;
    /*  Disassociates caller from a transaction branch. */
    const TMSUCCESS    = 0x004000000;
    /*  Caller is resuming association with a suspended transaction branch. */
    const TMRESUME     = 0x008000000;
    /*  Disassociates the caller and marks the transaction branch rollback-only. */
    const TMFAIL       = 0x020000000;
    /*  Caller is using one-phase optimization. */
    const TMONEPHASE   = 0x040000000;
    /*  The transaction work has been prepared normally.  */
    const XA_OK = 0;
    /*  The transaction branch has been read-only and has been committed.  */
    const XA_RDONLY = 3;

    /** 
    *  Commits the global transaction specified by xid.
    *  @return void
    */
    public function commit(/*Xid*/ $xid, $onePhase);

    /** 
    *  Ends the work performed on behalf of a transaction branch.
    *  @return void
    */
    public function end(/*Xid*/ $xid, $flags);

    /** 
    *  Tells the resource manager to forget about a heuristically completed transaction branch.
    *  @return void
    */
    public function forget(/*Xid*/ $xid);

    /**
    *  Obtains the current transaction timeout value set for this XAResource instance.
    *  @return int
    */
    public function getTransactionTimeout();

    /**
    *  This method is called to determine if the resource manager instance represented by the target object is the same as the resouce manager instance represented by the parameter xares.
    *  @return boolean
    */
    public function isSameRM(/*XAResource*/ $xares);

    /**
    *  Ask the resource manager to prepare for a transaction commit of the transaction specified in xid.
    *  @return int
    */
    public function prepare(/*Xid*/ $xid);

    /**
    *  Obtains a list of prepared transaction branches from a resource manager.
    *  @return Xid[]
    */
    public function recover($flag);

    /**
    *  Informs the resource manager to roll back work done on behalf of a transaction branch.
    *  @return void
    */
    public function rollback(/*Xid*/ $xid);

    /**
    *  Sets the current transaction timeout value for this XAResource instance.
    *  @return boolean
    */
    public function setTransactionTimeout($seconds);

    /**
    *  Starts work on behalf of a transaction branch specified in xid.
    *  @return void
    */
    public function start(/*Xid*/ $xid, $flags);
}