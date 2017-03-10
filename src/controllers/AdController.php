<?php
namespace Source\Ad\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

Class AdController extends Controller
{
    public function index(Request $request)
    {
        return view('ad::admin.page.index');
    }
}