<?php


namespace App\Controllers;


use App\Config;
use App\Models\Days;
use App\Models\Teachers;
use Core\Controller;
use Core\View;

class MyController extends Controller
{
    public function Teachers()
    {
        if (isset($_SESSION['login'])) {
            session_start();
            $Column = Teachers::all()->get(0);
            $Column = $Column->toArray();
            $Column = array_keys($Column);

            $Alltech = Teachers::all();

            return View::blade_render("Pages.Teachers", [
                'docroot' => Config::MY_WEBSITE,
                'Alltech' => $Alltech,
                'col1' => $Column[0],
                'col2' => $Column[1],
                'col3' => $Column[2]
            ]);
        } else {
            $sit = Config::MY_WEBSITE;
            header("Location:$sit/login");
        }

    }

    public function teacherdelete()
    {
        return View::blade_render("Pages.Delete.Teachers");
    }

    public function teacheredit()
    {
        return View::blade_render("Pages.Edit.Teachers");
    }

    public function teacheradd()
    {
        return View::blade_render("Pages.Add.Teachers");
    }


    public function Days()
    {
        if (isset($_SESSION['login'])) {
            session_start();
            $Allday = Days::all();
            return View::blade_render("Pages.Days", [
                'docroot' => Config::MY_WEBSITE,
                'Allday' => $Allday
            ]);
        } else {
            $sit = Config::MY_WEBSITE;
            header("Location:$sit/login");
        }
    }

    public function Years()
    {
        if (isset($_SESSION['login'])) {
            session_start();
            return View::blade_render("Pages.Years", [
                'docroot' => Config::MY_WEBSITE
            ]);
        } else {
            $sit = Config::MY_WEBSITE;
            header("Location:$sit/login");
        }
    }

    public function Room()
    {
        if (isset($_SESSION['login'])) {
            session_start();
            return View::blade_render("Pages.Room", [
                'docroot' => Config::MY_WEBSITE
            ]);
        } else {
            $sit = Config::MY_WEBSITE;
            header("Location:$sit/login");
        }
    }

    public function login()
    {
        return View::blade_render("Pages.login");
    }

}