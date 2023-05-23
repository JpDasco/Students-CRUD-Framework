<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\StudentsModel;

class StudentsController extends BaseController
{
    public function index() 
    {   
        $fetchStudent = new StudentsModel();
        $data['students'] = $fetchStudent->findAll();

        return view('students/list', $data);
    }
    
    public function createStudent()
    {
        return view('students/add');
    }

    public function storeStudent()
    {
        $insertStudents = new StudentsModel();

        $data = array(
            'first_name' => $this->request->getPost('firstName'),
            'last_name' => $this->request->getPost('lastName'),
            'student_course' => $this->request->getPost('studentCourse'),
            'student_year' => $this->request->getPost('studentYear'),
            'student_address' => $this->request->getPost('studentAddress'),
            'student_email' => $this->request->getPost('studentEmail'),
            'student_phone' => $this->request->getPost('studentPhone'),
        );

        $insertStudents->insert($data);

        return redirect()->to('/students')->with('success', 'Student Added Successfully!');

    }

    public function editStudent($id)
    {
        $editStudent = new StudentsModel();
        $data['student'] = $editStudent->where('id', $id)->first();

        return view('students/edit', $data);
    }

    public function updateStudent($id)
    {
        $updateStudent = new StudentsModel();
        $db = \Config\Database::connect();
        $data = array(
            'first_name' => $this->request->getPost('firstName'),
            'last_name' => $this->request->getPost('lastName'),
            'student_course' => $this->request->getPost('studentCourse'),
            'student_year' => $this->request->getPost('studentYear'),
            'student_address' => $this->request->getPost('studentAddress'),
            'student_email' => $this->request->getPost('studentEmail'),
            'student_phone' => $this->request->getPost('studentPhone'),
        );

        $updateStudent->update($id, $data);

        return redirect()->to('/students')->with('up', 'Student Update Successfully!');
    }

    public function deleteStudent($id)
    {
        $deleteStudent = new StudentsModel();
        $deleteStudent->delete($id);

        return redirect()->to('/students')->with('danger', 'Student Deleted!');
    }

}
