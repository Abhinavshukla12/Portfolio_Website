<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('home', ['title' => 'Home']);
    }

    public function about()
    {
        return view('about', ['title' => 'About']);
    }

    public function contact()
    {
        return view('contact', ['title' => 'Contact']);
    }

    public function sendContact()
    {
        $contactModel = new ContactModel();

        $data = [
            'name'    => $this->request->getPost('name'),
            'email'   => $this->request->getPost('email'),
            'message' => $this->request->getPost('message'),
        ];

        if ($contactModel->insert($data)) {
            return redirect()->to('/contact')->with('success', 'Your message has been sent successfully!');
        } else {
            return redirect()->to('/contact')->with('error', 'Failed to send your message. Please try again.');
        }
    }
}
