<?php namespace App\Controllers;

use App\Models\Admin\AppUsers;
use App\Models\Admin\Courses;

class LecturerController extends BaseController
{
	public function index()
	{
		return view('/');
	}


    public function lecturer_dashboard($param1 = ''){
        $session = session();

		$tot = new AppUsers();
		$cCou = new Courses();

		$page_data['page_name'] = 'Dashboard';
		$page_data['app_name'] = 'Rucst College University';
		$page_data['total_stud'] = $tot->WHERE(array('account_type' => '1'))->countAllResults();
		$page_data['total_PS'] = $tot->WHERE(array('account_type' => '1', 'status' => '0'))->countAllResults();
		$page_data['total_C'] = $cCou->countAllResults();

        return view('teacher/lecturer_dashboard', $page_data);

    }


	public function logout($param1 = ''){
		if ($param1 == 'me') {
            session()->destroy();
		    return redirect()->to('/');
        }
	}


}
