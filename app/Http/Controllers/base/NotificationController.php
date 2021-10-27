<?php

namespace App\Http\Controllers\base;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function index()
    {
        $data = [
            'category_name' => '',
            'page_name' => 'notification',
            'page_title' => __('navigation.notifications_page_title'),
            'navbar_target' => '2',
            'footer_target' => '1'
        ];
    
        return view('base_views.notifications.index')->with($data);
    }
}
