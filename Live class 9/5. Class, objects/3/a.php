<?php

// God object

class User
{
    public function login($email, $password) {
        $user = $this
            ->where('email', $email)
            ->get()
            ->first();

        return password_verify($password, $user->password);
    }

    public function register($email, $password) {
        // some validation
        self::create([
            'email' => $email,
            'password' => password_hash($password, PASSWORD_DEFAULT),
        ]);
    }

    public function restorePassword($email) {
        // validation
        $token = $this->createPasswordToken($email);
        self::update([
            'reset_token' => $token,
        ]);

        $this->email->send(
            $email, 'Password restore', 'views/auth/restorePassword', ['token' => $token]
        );
    }

    public function getAddressString() {
        $address  = [
            $this->profile->city,
            $this->profile->street,
            $this->profile->house,
            $this->profile->apartment,
        ];

        return implode(" ", $address);
    }

    public function getFullName() {
        return $this->profile->second_name . ' ' . $this->profile->first_name;
    }

    public function addBalance($sum) {
        return $this->getBalance()->addSum($sum);
    }

    public function getBalance() {
        return $this->getBalance()->sum;
    }

    public function getBillingStatistics() {
        return BillingHistory::where('user_id', $this->id)
            ->groupBy('created_at')
            ->get();
    }

    public function getPaymentsStatistics() {
        return Payments::where('user_id', $this->id)
            ->groupBy('created_at')
            ->get();
    }
}