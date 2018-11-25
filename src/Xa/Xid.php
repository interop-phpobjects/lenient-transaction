<?php
namespace Interop\Lenient\Transaction\Xa;

interface Xid
{
    const MAXBQUALSIZE = 64;
    const MAXGTRIDSIZE = 64;

    /** 
    *  Obtain the global transaction identifier part of XID as an array of bytes.
    *  @return byte[]
    */
    public function getGlobalTransactionId();

    /** 
    *  Obtain the transaction branch identifier part of XID as an array of bytes.
    *  @return byte[]
    */
    public function getBranchQualifier();

    /** 
    *  Obtain the format identifier part of the XID.
    *  @return int
    */
    public function getFormatId();
}