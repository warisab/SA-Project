<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller

{
    public function analytics(){
        $data = [
            'category_name' => 'dashboard',
            'page_name' => 'analytics',
            'has_scrollspy' => 0,
            'scrollspy_offset' => '',
        ];
        return view('dashboard')->with($data);
    }
    public function sales(){
        $data = [
            'category_name' => 'dashboard',
            'page_name' => 'sales',
            'has_scrollspy' => 0,
            'scrollspy_offset' => '',
        ];
        return view('dashboard2')->with($data);
    }
    public function login_boxed(){
        $data = [
            'category_name' => 'authentication',
            'page_name' => 'auth_boxed',
            'has_scrollspy' => 0,
            'scrollspy_offset' => '',
        ];
        return view('pages.authentication.auth_login_boxed')->with($data);
    }
    public function accordions(){
        $data = [
            'category_name' => 'components',
            'page_name' => 'accordions',
            'has_scrollspy' => 1,
            'scrollspy_offset' => 100,
        ];
        return view('pages.components.component_accordion')->with($data);
    }
    public function modals(){
        $data = [
            'category_name' => 'components',
            'page_name' => 'modals',
            'has_scrollspy' => 1,
            'scrollspy_offset' => 100,
        ];
        return view('pages.components.component_modal')->with($data);
    }
    public function table(){
        $data = [
            'category_name' => 'datatable',
            'page_name' => 'basic',
        'has_scrollspy' => 0,
        'scrollspy_offset' => '',

        ];
        return view('pages.tables.table_dt_basic')->with($data);
    }
    public function alert(){
        $data = [
            'category_name' => 'components',
            'page_name' => 'notifications',
            'has_scrollspy' => 1,
            'scrollspy_offset' => 100,

        ];
        return view('pages.components.component_snackbar')->with($data);
    }
    public function tabs(){
        $data = [
            'category_name' => 'components',
            'page_name' => 'tabs',
            'has_scrollspy' => 1,
            'scrollspy_offset' => 100,

        ];
        return view('pages.components.component_tabs')->with($data);
    }
    public function pricing_tables(){
        $data = [
            'category_name' => 'components',
            'page_name' => 'pricing_table',
            'has_scrollspy' => 0,
            'scrollspy_offset' => '',

        ];
        return view('pages.components.component_pricing_table')->with($data);
    }
}
