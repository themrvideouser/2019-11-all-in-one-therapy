<?php

namespace App\Http\Controllers;

use App\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search', '%%');
        $cookie_value = "asc"; //first order
        $field = "id"; //first field
        if(isset($_GET["field"])) {
            $field = $_GET["field"];
            if(!isset($_COOKIE["order"])) {
                $cookie_value = "asc";
                setcookie("order", $cookie_value, time() + (86400 * 30));
                header("Refresh:0");
            }
            if($_COOKIE["order"] == "desc") {
                $cookie_value = "asc";
                setcookie("order", $cookie_value, time() + (86400 * 30), "/");
            }
            if($_COOKIE["order"] == "asc") {
                $cookie_value = "desc";
                setcookie("order", $cookie_value, time() + (86400 * 30), "/");
            }
        }
        return view('patients', [
            'patients' => Patient::orderBy($field, $cookie_value)->where('id', '<>', $search)->paginate(10)
        ]);
    }
}
