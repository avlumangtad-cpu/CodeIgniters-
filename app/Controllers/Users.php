<?php

namespace App\Controllers;

use App\Models\UserModel;

class Users extends BaseController
{
    public function index(): string
    {
        $userModel = new UserModel();

        $users = $userModel->findAll();

        return view('users/index', [
            'title' => 'User Accounts',
            'users' => $users,
        ]);
    }

    public function edit(int $id)
{
    $userModel = new UserModel();

    $user = $userModel->find($id);

    if ($user === null) {
        throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
    }

    return view('users/edit', [
        'title' => 'Edit User',
        'user'  => $user,
    ]);
}

public function update(int $id)
{
    $userModel = new UserModel();

    $user = $userModel->find($id);

    if ($user === null) {
        throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
    }

    $rules = [
        'username'  => "required|max_length[50]|is_unique[users.username,id,{$id}]",
        'full_name' => 'required|max_length[100]',
    ];

$avatar = $this->request->getFile('avatar');

if ($avatar !== null && $avatar->getError() !== UPLOAD_ERR_NO_FILE) {
    $rules['avatar'] = 'uploaded[avatar]|is_image[avatar]|mime_in[avatar,image/jpeg,image/png]|max_size[avatar,2048]';
}
    
    if (! $this->validateData(
    $this->request->getPost(),
    $rules
)) {
        return redirect()->back()
            ->withInput()
            ->with('errors', $this->validator->getErrors());
    }

    
$data = [
    'username'  => $this->request->getPost('username'),
    'full_name' => $this->request->getPost('full_name'),
];

if ($avatar !== null && $avatar->isValid() && ! $avatar->hasMoved()) {
    $newName = $avatar->getRandomName();

    $avatar->move(FCPATH . 'uploads/avatars', $newName);

    $image = \Config\Services::image();

$image->withFile(FCPATH . 'uploads/avatars/' . $newName)
    ->fit(200, 200, 'center')
    ->save(FCPATH . 'uploads/avatars/' . $newName);

    $data['avatar'] = $newName;
}

$userModel->update($id, $data);


    return redirect()->to(site_url('users'));
}

    public function new()
    {
        return view('users/new', [
            'title' => 'New User',
        ]);
    }

    public function create()
    {
        $rules = [
            'username'  => 'required|max_length[50]|is_unique[users.username]',
            'full_name' => 'required|max_length[100]',
        ];

        if (! $this->validateData($this->request->getPost(), $rules)) {
            return redirect()->back()
                ->withInput()
                ->with('errors', $this->validator->getErrors());
        }
        $userModel = new UserModel();

$userModel->insert([
    'username'  => $this->request->getPost('username'),
    'full_name' => $this->request->getPost('full_name'),
]);

return redirect()->to(site_url('users'));
        }
    }