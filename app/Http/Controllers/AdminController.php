<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function inicio(){
        return "Pagina home";
    }
    public function dashboard(){
        return "Paginas de admin dashboard";
    }
    public function pedidos(){
        return "Pagina de pedidos";
    }
}
