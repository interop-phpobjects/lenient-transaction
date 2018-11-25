<?php
namespace Interop\Lenient\Transaction\Xa;

interface XaException
{
    /* The transaction branch was read-only and has been committed. */
    const XA_RDONLY  = 3;

    /* Routine returned with no effect and may be reissued. */
    const XA_RETRY   = 4;

    /* The transaction branch has been heuristically committed and rolled back. */
    const XA_HEURMIX = 5;

    /* The transaction branch has been heuristically rolled back. */
    const XA_HEURRB  = 6;

    /* The transaction branch has been heuristically committed. */
    const XA_HEURCOM = 7;

    /* The transaction branch may have been heuristically completed. */
    const XA_HEURHAZ = 8;

    /* Resumption must occur where the suspension occurred. */
    const XA_NOMIGRATE = 9;

    /* The inclusive lower bound of the rollback codes. */
    const XA_RBBASE  = 100;

    /* Indicates that the rollback was caused by an unspecified reason. */
    const XA_RBROLLBACK = 100;

    /* Indicates that the rollback was caused by a communication failure. */
    const XA_RBCOMMFAIL = 101;

    /* A deadlock was detected. */
    const XA_RBDEADLOCK = 102;

    /* A condition that violates the integrity of the resource was detected. */
    const XA_RBINTEGRITY = 103;

    /* The resource manager rolled back the transaction branch for a reason not on this list. */
    const XA_RBOTHER = 104;

    /* A protocol error occurred in the resource manager. */
    const XA_RBPROTO = 105;

    /* A transaction branch took too long. */
    const XA_RBTIMEOUT = 106;

    /* The inclusive upper bound of the rollback error code. */
    const XA_RBEND = 107;

    /* May retry the transaction branch. */
    const XA_RBTRANSIENT = 107;

    /* There is an asynchronous operation already outstanding. */
    const XAER_ASYNC  = -2;

    /* A resource manager error has occurred in the transaction branch. */
    const XAER_RMERR  = -3;

    /* The XID is not valid. */
    const XAER_NOTA   = -4;

    /* Invalid arguments were given. */
    const XAER_INVAL  = -5;

    /* Routine was invoked in an improper context. */
    const XAER_PROTO  = -6;

    /* Resource manager is unavailable. */
    const XAER_RMFAIL = -7;

    /* The XID already exists. */
    const XAER_DUPID  = -8;

    /* The resource manager is doing work outside a global transaction. */
    const XAER_OUTSIDE = -9;
}
