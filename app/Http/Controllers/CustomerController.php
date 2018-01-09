<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class CustomerController extends Controller
{
  public function index()
    {
      $users = User::all();
      return view('admin.customers.index',compact('users'));
    }
}
