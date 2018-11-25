<?php
namespace Interop\Lenient\Transaction;

interface ResourceManager
{
    public function setTimeout($seconds);
    public function isNestedTransactionAllowed();
    public function getName();
    public function beginTransaction($definition=null);
    public function commit();
    public function rollback();
    public function suspend();
    public function resume($txObject);
}
