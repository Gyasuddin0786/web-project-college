<?php
class BankAccount {
    public $accountNumber;
    public $balance;

    public function __construct($accountNumber, $balance) {
        $this->accountNumber = $accountNumber;
        $this->balance = $balance;
    }

    public function deposit($amount) {
        $this->balance += $amount;
    }

    public function withdraw($amount) {
        if ($this->balance >= $amount) {
            $this->balance -= $amount;
            return true;
        } else {
            return false;
        }
    }
}

$account = new BankAccount("123456345", 12000);
echo "Initial balance: $" . $account->balance . "<br>";
$account->deposit(300);
echo "After deposit: $" . $account->balance . "<br>";
$account->withdraw(100);
echo "After withdrawal: $" . $account->balance;
?>
