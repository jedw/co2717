<?php namespace App\Controllers;

use App\Models\StudentModel;

class Api extends BaseController
{
	protected $model;

	public function __construct()
    {
		$this->model = new StudentModel();
	}

    public function records()
    {
        $data = $this->model->getAllStudents();
        return $this->response->setJSON($data);
    }

    public function selectRecord()
    {
        $id = $this->request->uri->getSegment(3);
        $data = $this->model->getStudentWhere($id);
        return $this->response->setJSON($data);
    }

    public function new()
    {
        if (!$this->request->getPost('first_name') OR
            !$this->request->getPost('last_name') OR
            !$this->request->getPost('address') OR
            !$this->request->getPost('email') OR
            !$this->request->getPost('mobile'))
        {
            return $this->response->setJSON('{"msg" : "One or more required fields missing"}');
        }

        $data = [
            'first_name' => $this->request->getPost('first_name'),
            'last_name' => $this->request->getPost('last_name'),
            'address' => $this->request->getPost('address'),
            'email' => $this->request->getPost('email'),
            'mobile' => $this->request->getPost('mobile'),
        ];
       
		$this->model->addnewStudent($data);
		return $this->response->setJSON('{"msg" : "Success"}');
    }

    public function update()
    {
		if (!$this->request->getPost('Fname') OR
            !$this->request->getPost('Lname') OR
            !$this->request->getPost('Address') OR
            !$this->request->getPost('Email') OR
            !$this->request->getPost('Mobile'))
        {
            return $this->response->setJSON('{"msg" : "One or more required fields missing"}');
        }

        $data = [
			'first_name' => $this->request->getPost('Fname'),
            'last_name' => $this->request->getPost('Lname'),
            'address' => $this->request->getPost('Address'),
            'email' => $this->request->getPost('Email'),
            'mobile' => $this->request->getPost('Mobile'),
		];

		$id = $this->request->uri->getSegment(4);
		$this->model->updateStudentWhere($data, $id);
		return $this->response->setJSON('{"msg" : "Success"}');
	}

    public function delete()
    {
		$id = $this->request->uri->getSegment(4);
		$this->model->deleteStudentWhere($id);
		return $this->response->setJSON('{"msg" : "Success"}');
	}
}