<?php

namespace App\Foundation\Auth;

trait HandlesVisa
{

  protected function getSeverUrl() {
    return url(config('visa.server_url'));
  }

  public function login() {
    $loginUrl = $this->getSeverUrl() . '/login';
    return redirect($loginUrl);
  }

  public function register() {
    $registerUrl = $this->getSeverUrl() . '/register';
    return redirect($registerUrl);
  }

  public function logout() {
    $logoutUrl = $this->getSeverUrl() . '/logout';
    return redirect($logoutUrl);
  }

}
