<?php

namespace App\Http\Controllers;

use App\Models\Visitor;
use App\Models\Product;
use App\Models\Blog;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $visit_t = Visitor::count();
        $visit_d = Visitor::where('visit_date', date('Y-m-d'))->count();
        $visit_u = Visitor::distinct()->get('ip_address')->count();

        $product = Product::all()->count();
        $blog = Blog::all()->count();

        return view('admin.dashboard', compact('visit_t', 'visit_d', 'visit_u', 'blog', 'product'));
    }
}
