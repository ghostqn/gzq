<?php
/**
 * Created by PhpStorm.
 * User:Qina
 * Date: 2016/12/22
 * Time: 16:06
 */

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class DownloadController extends Controller
{
    public function index ()
    {
        return view('download');
    }

}