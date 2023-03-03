<?php namespace App\Controllers;

use App\Models\Admin\AppUsers;
use App\Models\Admin\Courses;
use App\Models\LoginModel;

class Home extends BaseController
{

	public function index(){

		return view('home');

	}

	public function about(){

		return view('about');

	}

	public function admission($param1 = ''){
		
		$course = new Courses();
		$student = new AppUsers();
		$session = session();

		if($param1 == 'create'):

			if($this->request->getMethod() == 'post'):

				$rules = [
					"studName" => "required",
					"contact" => "required",
					"email" => "required",
					"national" => "required",
					"course" => "required",
					"studName" => "required",
				];
	
				if (!$this->validate($rules)) {

					$session->setFlashdata("error", "Please all fields required ");

				}else
				{
					$data['name'] = $this->request->getVar('studName');
					$data['courses_id'] = $this->request->getVar('course');
					$data['email'] = $this->request->getVar('email');
					$data['callContact'] = $this->request->getVar('contact');
					$data['national'] = $this->request->getVar('national');
					$data['address'] = $this->request->getVar('address');
					$data['dob'] = $this->request->getVar('dob');
					$data['student_type'] = $this->request->getVar('studentType');
					$data['school'] = $this->request->getVar('school');
					$data['yearCom'] = $this->request->getVar('yearC');
					$data['qualification'] = $this->request->getVar('qualification');
					$data['course_name'] = $this->request->getVar('currentS');
					$data['account_type'] = '1';
					$data['status'] = '0';

					$student->insert($data);
					$session->setFlashdata("success", "Form submitted Successfully");
				}

			endif;

		endif;

		$page_data['course'] = $course->findAll();

		return view('admission', $page_data);

	}

	//--------------------------------------------------------------------

}
