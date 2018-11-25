<?php
namespace Interop\Lenient\Transaction\Annotation;

/**
* Specifies whether a session bean or message driven bean has container managed transactions or bean managed transactions.
*
* @Annotation
* @Target({ TYPE })
*/
interface TransactionManagement
{
    /*
    * @var string or array    list or name of a transaction manager
    *
    public $value;

    */
}