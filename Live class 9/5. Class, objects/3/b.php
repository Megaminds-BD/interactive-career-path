<?php

// Avoid writing God objects/classes

class User
{
    public function login($email, $password)
    {
        $user = $this
            ->where('email', $email)
            ->get()
            ->first();

        return password_verify($password, $user->password);
    }

    public function register($email, $password)
    {
        // some validation
        self::create([
            'email' => $email,
            'password' => $password
        ]);
    }
}

class Balance
{
    public function addSum($sum) {
        $this->sum += $sum;
        return $this->save();
    }

    public function getBalance() {
        return $this->sum;
    }
}

class Profile
{
    public function getAddressString() {
        $address  = [
            $this->city,
            $this->street,
            $this->house,
            $this->apartment,
        ];

        return implode(" ", $address);
    }

    public function getFullName() {
        return $this->second_name . ' ' . $this->first_name;
    }
}

class UserStatistics
{
    public function getBillingStatistics() {
        return BillingHistory::where('user_id', $this->userId)
            ->groupBy('created_at')
            ->get();
    }

    public function getPaymentsStatistics() {
        return Payments::where('user_id', $this->userId)
            ->groupBy('created_at')
            ->get();
    }
}