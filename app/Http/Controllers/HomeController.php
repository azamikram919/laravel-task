<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return View('admin.dashboard')
            ->with('total_products', Product::all()->count())
            ->with('total_users', User::all()->count());
    }

    public function adminAddProduct(Request $request)
    {
        if ($request->hasFile('thumbnail') && $request->thumbnail->isValid()) {
            $extension = $request->thumbnail->extension();
            $filename = time() . "." . $extension;
            $request->thumbnail->move(public_path('images'), $filename);

        } else {
            $filename = 'no-image.jpg';
        }


        $created = Post::create([
            'title' => $request->title,
            'body' => $request->body,
            'thumbnail' => $filename,
        ]);


        if ($created) {
            $this->validate($request, [
                'title' => 'required|unique:posts|max:255|min:5',
                'body' => 'required',
            ]);
            if ($created) {
                return redirect('posts')
                    ->with('message', 'Post Successfully Created');
            }
        }
        return view('admin.add_product');
    }
}
