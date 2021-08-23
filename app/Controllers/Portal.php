<?php

namespace App\Controllers;

class Portal extends BaseController
{
	public function index()
	{
        $data = [
            'title'     => 'Portal | Verval Ponsel SMANESTA'
        ];

		return view('portal/home', $data);
	}
}
