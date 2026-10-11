<?php

namespace App\Controllers;

use App\Models\CustomerModel;

class Customers extends BaseController
{
    public function index(): string
    {
        $customerModel = new CustomerModel();

        $customers = $customerModel->findAll();

        return view('customers/index', [
            'title'     => 'Customer Accounts',
            'customers' => $customers,
        ]);
    }

    public function new()
    {
        return view('customers/new', [
            'title' => 'New Customer',
        ]);
    }

    public function create()
    {
        $rules = [
            'full_name' => 'required|max_length[100]',
            'email'     => 'required|valid_email|max_length[100]',
            'phone'     => 'permit_empty|max_length[20]',
        ];

        if (! $this->validateData($this->request->getPost(), $rules)) {
            return redirect()->back()
                ->withInput()
                ->with('errors', $this->validator->getErrors());
        }

        $customerModel = new CustomerModel();

        $customerModel->insert([
            'full_name' => $this->request->getPost('full_name'),
            'email'     => $this->request->getPost('email'),
            'phone'     => $this->request->getPost('phone') ?: null,
        ]);

        return redirect()->to(site_url('customers'));
    }

    public function edit(int $id)
    {
        $customerModel = new CustomerModel();

        $customer = $customerModel->find($id);

        if ($customer === null) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        return view('customers/edit', [
            'title'    => 'Edit Customer',
            'customer' => $customer,
        ]);
    }

    public function update(int $id)
    {
        $customerModel = new CustomerModel();

        if ($customerModel->find($id) === null) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        $rules = [
            'full_name' => 'required|max_length[100]',
            'email'     => 'required|valid_email|max_length[100]',
            'phone'     => 'permit_empty|max_length[20]',
        ];

        if (! $this->validateData($this->request->getPost(), $rules)) {
            return redirect()->back()
                ->withInput()
                ->with('errors', $this->validator->getErrors());
        }

        $customerModel->update($id, [
            'full_name' => $this->request->getPost('full_name'),
            'email'     => $this->request->getPost('email'),
            'phone'     => $this->request->getPost('phone') ?: null,
        ]);

        return redirect()->to(site_url('customers'));
    }
}
