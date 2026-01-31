<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SubjectModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubjectController extends Controller
{
    public function list()
    {
        $data['getRecord'] = SubjectModel::getRecord();
        $data['header_title'] = "Subject List";

        if (Auth::user()->user_type == 1) {
            return view('admin.subject.list', $data);
        } elseif (Auth::user()->user_type == 2) {
            return view('teacher.subject.list', $data);
        }
    }
}
