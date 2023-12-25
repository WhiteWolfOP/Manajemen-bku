<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index(): string
    {
        $session=\Config\Services::session();
        // dd($session->get());
        return view('dashboard\index');
    }
}
