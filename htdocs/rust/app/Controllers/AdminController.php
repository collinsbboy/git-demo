<?php namespace App\Controllers;

use App\Models\Admin\AppUsers;
use App\Models\Admin\Courses;
use App\Models\CrudModel;

class AdminController extends BaseController
{

    public function index()
	{
		return view('/');
	}


	public function data_sheet($param1 = '',$param2 = '', $param3 = ''){
		$session = session();

		if($param1 == 'record'){

			if($this->request->getMethod() == 'post'){

			$rules = [
				"course" => "required",
			];

				if (!$this->validate($rules)) {

					$session->setFlashdata("error", "Please all fields required ");

				}else
				{
						
					$dataSh = new Courses();
					$exist = $dataSh->WHERE(array('course_name' => $this->request->getVar('course')))->countAllResults();

					if( $exist > 0){
						$session->setFlashdata("error", "Course already exist ");

					}else{
						$data['course_name'] = $this->request->getVar('course');

						$dataSh = new Courses();

						$dataSh->insert($data);
						$session->setFlashdata("success", "Course was created Successfully");

					}
					
				}
			}

		}

		if($param1 == 'delete'){
			$dataSh = new Courses();

			if ($dataSh->WHERE(['courses_id' => $param3])->delete()) {
				$session->setFlashdata("success", "Delete was successfully");
			}else {
				$session->setFlashdata("error", "Something happened please try again");
			}
		}
		
		$page_data['page_name'] = 'Courses';
		$page_data['app_name'] = 'Rucst College University';

		$course = new Courses();
		$page_data['course'] = $course->findAll();

		return view('admin/data_sheet', $page_data);
	}


	public function all_student_list($param1 = '', $param2 = '', $param3 = ''){
		$session = session();

		if ($param1 == 'change') {
       
			$data['status']       =       	'1';

			$stud_list = new AppUsers();

			if ($stud_list->WHERE('user_table_id', $param3)->set($data)->update()) {
				$session->setFlashdata("success", "Update successfully");
			}else {
				$session->setFlashdata("error", "Something happened please try again");
			}
					
		}


		if($param1 == 'delete'){
			$stud_list = new AppUsers();

			if ($stud_list->WHERE(['user_table_id' => $param3])->delete()) {
				$session->setFlashdata("success", "Delete was successfully");
			}else {
				$session->setFlashdata("error", "Something happened please try again");
			}
		}


		$page_data['page_name'] = 'Student - List';
		$page_data['app_name'] = 'Rucst College University';

		$db = db_connect();
        $model = new CrudModel($db);
		$stud_list = new AppUsers();

		$page_data['class_list'] = $model->getClass();
		$page_data['all_stud'] = $stud_list->WHERE(['account_type' => '1'])->findAll();

		return view('admin/students', $page_data);

	}

}

?>