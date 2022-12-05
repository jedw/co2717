<?php

namespace App\Controllers;
use App\Models\StudentModel;

class Home extends BaseController
{
    protected $studentmodel;

    public function __construct()
    {
        $this->studentmodel = new StudentModel();
    }

    public function index()
    {
        return view('welcome_message');
    }

    public function records()
	{
        $data['students'] = $this->studentmodel->findAll();
		return view('records', $data);
	}

    public function create()
	{
		return view('add');
	}

	public function store()
	{
        $data = [
            'first_name' => $this->request->getPost('Fname'),
            'last_name' => $this->request->getPost('Lname'),
            'address' => $this->request->getPost('Address'),
            'email' => $this->request->getPost('Email'),
            'mobile' => $this->request->getPost('Mobile'),
        ];
		$this->studentmodel->insert($data);
        return redirect()->to(site_url('Home/records')); 
	}

    public function edit()
	{
		$id = $this->request->uri->getSegment(3);
		$data['student'] = $this->studentmodel->where('id', $id)->first();
		return view('edit', $data);
	}

	public function update()
	{
        $data = [
			'first_name' => $this->request->getPost('Fname'),
            'last_name' => $this->request->getPost('Lname'),
            'address' => $this->request->getPost('Address'),
            'email' => $this->request->getPost('Email'),
            'mobile' => $this->request->getPost('Mobile'),
		];
		$id = $this->request->uri->getSegment(3);
		$this->studentmodel->update($id, $data);
		return redirect()->to(site_url('Home/records')); 
	}

	public function delete()
	{
		$id = $this->request->uri->getSegment(3);
		$this->studentmodel->where('id', $id)->delete();
		return redirect()->to(site_url('Home/records')); 
	}
}
