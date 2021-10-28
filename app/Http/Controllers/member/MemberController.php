<?php

namespace App\Http\Controllers\member;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;

class MemberController extends Controller
{
    public function index_logged_profile()
    {
        $data = [
            'category_name' => '',
            'page_name' => 'dashboard',
            'page_title' => __('dashboard.index_page_title')
        ];
    
        return view('dashboard.pages.member.logged.view_profile')->with($data);
    }
}
