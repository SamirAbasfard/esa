<?php


namespace App\Controllers;

use App\Config;
use App\Models\Students;
use Core\Controller;
use Core\View;

class HomeController extends Controller
{

    public function index()
    {

        session_start();

        if (isset($_SESSION['login'])) {

            $AllStudent = Students::all();

            $Column = Students::all()->get(0);
            $Column = $Column->toArray();
            $Column = array_keys($Column);

            return View::blade_render('index', [
                'docroot' => Config::MY_WEBSITE,
                'AllStudent' => $AllStudent,
                'col1' => $Column[0],
                'col2' => $Column[1],
                'col3' => $Column[2],
                'col4' => $Column[3]
            ]);

        } else {
            $sit = Config::MY_WEBSITE;
            header("Location:$sit/login");
        }

    }


    public function studentdelete()
    {
        return View::blade_render("Pages.Delete.Student");
    }

    public function studentadd()
    {
        return View::blade_render("Pages.Add.Student");
    }

    public function studentedit()
    {
        return View::blade_render("Pages.Edit.Student");
    }

}