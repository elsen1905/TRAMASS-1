<?php

namespace App\Http\Controllers;

use App\Product_Category;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller {
	public function index() {
		return view('admin.admin');
	}
	public function user() {
		$users = DB::table('users')->orderby('id', "DESC")->get();

		return view('admin.user', ['users' => $users]);
	}
	public function product_category() {
		return view('admin.product_category');
	}
	public function user_product($id) {

		$products = DB::table('products')->where('user_id', '=', $id)->orderby('id', "DESC")->get();
		return view('admin.user_product', ['products' => $products]);
	}
	public function user_delete($id) {
		if (DB::table('users')->where('id', $id)->delete()):

			if (DB::table('products')->where('user_id', '=', $id)->delete()) {

				return redirect()->back();

			} else {
				print 'have same error';

			}

		endif;

	}

	public function store(Request $request, Product_Category $product_category) {
		$category = new Product_Category;
		$category->title = $request->title;
		$category->save();
		$categories = Product_Category::all();
		return view('/admin/product_category', compact('categories'));
	}

}
