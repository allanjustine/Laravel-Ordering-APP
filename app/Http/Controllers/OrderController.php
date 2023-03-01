<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function order() {
        return view('pages.order');
    }
    public function edit($id) {
        return view('pages.edit', compact('id'));
    }
    public function view($id) {
        return view('pages.view', compact('id'));
    }
}
