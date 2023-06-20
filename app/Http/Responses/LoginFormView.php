<?php

namespace App\Http\Responses;

use Illuminate\View\View;

class LoginFormView
{
    public function getView(): View
    {
        return view('login');
    }
}

?>
