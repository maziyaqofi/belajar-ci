<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class Redirect implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // Do nothing for before filter
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Check if user is authenticated
        if (session()->get('isLoggedIn')) {
            return redirect()->to(site_url('contact'));
        }

        return $response;
    }
}
