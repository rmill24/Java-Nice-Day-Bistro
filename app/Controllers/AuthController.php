<?php

namespace App\Controllers;

use App\Models\UserModel;

class AuthController extends BaseController
{
    protected $helpers = ['form'];

    public function login()
    {
        $model = new UserModel();

        $validation = \Config\Services::validation();

        if ($this->request->is('post')) {
            $data = $this->request->getPost();

            $validation->setRules([
                'email' => 'required|valid_email',
                'password' => 'required|min_length[6]'
            ]);

            if (! $validation->run($data)) {
                return view('login', [
                    'errors' => $validation->getErrors()
                ]);
            }

            // check if user exists via email or username, depending on what was provided by the user
            $user = $model->where('email', $data['email'])
                ->orWhere('username', $data['email'])
                ->first();

            if ($user && password_verify($data['password'], $user['password'])) {
                $session = session();
                $session->set([
                    'user_id' => $user['id'],
                    'username' => $user['username'],
                    'email' => $user['email'],
                    'role' => $user['role'],
                    'logged_in' => true
                ]);

                // redirect based on role
                if ($user['role'] === 'admin') {
                    return redirect()->to('admin');
                } else {
                    return redirect()->to('home');
                }
            } else {
                return view('login', [
                    'errors' => ['Invalid login credentials.']
                ]);
            }
        }

        return view('login'); // initial GET request
    }

    public function register()
    {

        $validation = \Config\Services::validation();
        $model = new UserModel();

        if ($this->request->is('post')) {
            $data = $this->request->getPost();

            $validation->setRules([
                'username' => 'required|max_length[30]',
                'email'    => 'required|valid_email|is_unique[users.email]',
                'password' => 'required|min_length[6]',
                'passconf' => 'required|matches[password]'
            ]);

            if (! $validation->run($data)) {
                return view('signup', [
                    'errors' => $validation->getErrors()
                ]);
            }

                // save user (hash password before storing)
                $model->save([
                    'username' => $data['username'],
                    'email' => $data['email'],
                    'password' => password_hash($data['password'], PASSWORD_DEFAULT),
                    'role' => 'customer'
                ]);

                // set one-time success message and redirect to login
                session()->setFlashdata('success', 'Account created successfully. Please log in.');
                return redirect()->to(site_url('login'));
        }

        return view('signup'); // initial GET request
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }
}
