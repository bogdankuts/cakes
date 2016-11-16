<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller {
    
	public function index() {
		
		return view('static.index');
	}
	
	public function about() {
		
		return view('static.about');
	}
	
	public function products() {
		
		return view('static.products');
	}
	
	public function product() {
		
		return view('static.product');
	}
	
	public function services() {
		
		return view('static.services');
	}
	
	public function blog() {
		
		return view('static.blog');
	}
	
	public function blogPost() {
		
		return view('static.blog-post');
	}
	
	public function contacts() {
		
		return view('static.contacts');
	}
	
	private function getInstaPost() {
		
	}
}
