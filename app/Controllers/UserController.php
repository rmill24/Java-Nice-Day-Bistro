<?php

namespace App\Controllers;

use App\Models\UserModel;

class UserController extends BaseController
{
    protected $helpers = ['form'];


    public function add()
    {
        $model = new UserModel();
        $validation = \Config\Services::validation();

        if ($this->request->is('post')) {
            $data = $this->request->getPost();

            $validation->setRules([
                'username' => 'required|max_length[30]',
                'email'    => 'required|valid_email|is_unique[users.email]',
                'password' => 'required|min_length[6]',
                'passconf' => 'required|matches[password]'
            ]);

            if (! $validation->run($data)) {
                return view('add_user', [
                    'errors' => $validation->getErrors()
                ]);
            }

            $model->save([
                'username' => $data['username'],
                'email' => $data['email'],
                'password' => password_hash($data['password'], PASSWORD_DEFAULT),
                'role' => isset($data['role']) && $data['role'] !== '' ? $data['role'] : 'customer'
            ]);

            return redirect()->to('/admin');
        }

        return view('add_user');
    }

    public function edit($id)
    {
        $model = new UserModel();
        $user = $model->find($id);

        $validation = \Config\Services::validation();

        if ($this->request->is('post')) {
            $data = $this->request->getPost();

            $validation->setRules([
                'username' => 'permit_empty|max_length[30]',
                'email'    => 'permit_empty|valid_email',
                'password' => 'permit_empty|min_length[6]',
                'role'     => 'permit_empty|in_list[admin,customer]'
            ]);

            if (!$validation->run($data)) {
                return view('edit_user', [
                    'user' => $user,
                    'errors' => $validation->getErrors()
                ]);
            }

            // add non-empty fields to update array to be passed later
            $updateData = [];

            if (!empty($data['username'])) {
                $updateData['username'] = $data['username'];
            }

            if (!empty($data['email'])) {
                $updateData['email'] = $data['email'];
            }

            if (!empty($data['password'])) {
                $updateData['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
            }

            if (!empty($data['role'])) {
                $updateData['role'] = $data['role'];
            }

            // only update if there's something to update
            if (!empty($updateData)) {
                $model->update($id, $updateData);
            }

            return redirect()->to('/admin');
        }

        return view('edit_user', ['user' => $user]);
    }


    public function delete($id)
    {
        $model = new UserModel();
        $model->delete($id);
        return redirect()->to('/admin');
    }
}
