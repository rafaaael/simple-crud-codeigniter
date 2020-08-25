<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\StudentModel;

class Student extends Controller
{
    public function index()
    {
        $model = new StudentModel();
        $data['students_detail'] = $model->orderBy('id', 'DESC')->findAll();

        return view('list', $data);
    }
    public function create()
    {
        return view('add');
    }
    public function store()
    {
        helper(['form', 'url']);

        $model = new StudentModel();
        $data = [
            'first_name' => $this->request->getVar('txtFname'),
            'last_name'  => $this->request->getVar('txtLname'),
            'address'  => $this->request->getVar('txtAddress'),
            'email'  => $this->request->getVar('txtEmail'),
            'mobile'  => $this->request->getVar('txtMobile'),
        ];
        $save = $model->insert($data);
        return redirect()->to(base_url('student'));
    }
    public function edit($id = null)
    {

        $model = new StudentModel();
        $data['student'] = $model->where('id', $id)->first();
        return view('edit', $data);
    }
    public function update()
    {
        helper(['form', 'url']);
        $model = new StudentModel();

        $id = $this->request->getVar('id');

        $data = [
            'first_name' => $this->request->getVar('txtFname'),
            'last_name'  => $this->request->getVar('txtLname'),
            'address'  => $this->request->getVar('txtAddress'),
            'email'  => $this->request->getVar('txtEmail'),
            'mobile'  => $this->request->getVar('txtMobile'),
        ];

        $save = $model->update($id, $data);

        return redirect()->to(base_url('student'));
    }
    public function delete($id = null)
    {
        $model = new StudentModel();
        $data['user'] = $model->where('id', $id)->delete();
        return redirect()->to(base_url('student'));
    }
}
