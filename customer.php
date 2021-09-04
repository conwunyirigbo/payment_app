<?php
class Customer
{
    public $firstname;
    public $lastname;
    public $balance;
    public $accountno;
    
    public function __construct($fname, $lname)
    {
        $this->firstname = $fname;
        $this->lastname = $lname;
        $this->balance = 0;
        $this->accountno = rand(111,999);
    }
    
    public function deposit($amount)
    {
        $this->balance = $this->balance + $amount;
    }

    public function withdraw($amount)
    {
        $this->balance = $this->balance - $amount;
    }

    public function transfer(\Customer $recipient, $amount)
    {
        $this->balance = $this->balance - $amount;
        $recipient->balance = $recipient->balance + $amount;
    }

    public function checkBalance()
    {
        return $this->firstname.' '.$this->lastname.' ('.$this->accountno.') - '.$this->balance;
    }

}
?>
