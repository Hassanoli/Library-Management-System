<?php

namespace App\Http\Controllers;

use Laravel\Socialite\Facades\Socialite;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Book;
use App\Models\Category;
use App\Models\Borrow;
use Illuminate\Support\Facades\Auth;
use Exception;

class AdminController extends Controller
{
    public function index()
    {
        if (Auth::id()) {
            $user_type = Auth()->user()->usertype;

            if ($user_type == 'admin') {
                $user = User::all()->count();
                $book = Book::all()->count();
                $borrow = Borrow::where('status', 'approved')->count();
                $returned = Borrow::where('status', 'returned')->count();

                return view('admin.index', compact('user', 'book', 'borrow', 'returned'));
            } elseif ($user_type == 'user') {
                $data = Book::all();
                return view('home.index', compact('data'));
            } else {
                return redirect()->back();
            }
        }
    }

    public function category_page()
    {
        $data = Category::all();
        return view('admin.category', compact('data'));
    }

    public function add_category(Request $request)
    {
        $data = new Category;
        $data->cat_title = $request->category;
        $data->save();

        return redirect()->back()->with('message', 'Category Added Successfully');
    }

    public function cat_delete($id)
    {
        $data = Category::find($id);
        $data->delete();

        return redirect()->back();
    }

    public function edit_category($id)
    {
        $category = Category::find($id);
        return view('admin.edit_category', compact('category'));
    }

    public function update_category(Request $request, $id)
    {
        $category = Category::find($id);

        if (!$category) {
            return redirect()->back()->with('error', 'Category not found.');
        }

        $category->cat_title = $request->cat_name;
        $category->save();

        return redirect('/category_page')->with('message', 'Category updated successfully.');
    }

    public function add_book()
    {
        $category = Category::all();
        return view('admin.add_book', compact('category'));
    }

    public function store_book(Request $request)
    {
        $category = new Book;

        $category->title = $request->book_name;
        $category->auther_name = $request->auther_name;
        $category->price = $request->price;
        $category->description = $request->description;
        $category->quantity = $request->quantity;
        $category->category_id = $request->category;

        $book_image = $request->file('book_img');
        $auther_image = $request->file('auther_img');

        if ($book_image) {
            $book_image_name = time() . '.' . $book_image->getClientOriginalExtension();
            $book_image->move('book', $book_image_name);
            $category->book_img = $book_image_name;
        }

        if ($auther_image) {
            $auther_image_name = time() . '.' . $auther_image->getClientOriginalExtension();
            $auther_image->move('auther', $auther_image_name);
            $category->auther_img = $auther_image_name;
        }

        $category->save();
        return redirect()->back()->with('success', 'Book added successfully!');
    }

    public function show_book()
    {
        $book = Book::all();
        return view('admin.show_book', compact('book'));
    }

    public function book_delete($id)
    {
        $data = Book::find($id);

        if ($data) {
            $data->delete();
            return redirect()->back()->with('message', 'Book deleted successfully.');
        } else {
            return redirect()->back()->with('message', 'Book not found.');
        }
    }

    public function edit_book($id)
    {
        $data = Book::find($id);
        $category = Category::all();
        return view('admin.edit_book', compact('data', 'category'));
    }

    public function update_book(Request $request, $id)
    {
        $data = Book::find($id);
        
        $data->title = $request->title;
        $data->auther_name = $request->auther_name;
        $data->price = $request->price;
        $data->description = $request->description;
        $data->quantity = $request->quantity;
        $data->category_id = $request->category;

        $book_image = $request->file('book_img');
        $auther_image = $request->file('auther_img');

        if ($book_image) {
            $book_image_name = time() . '.' . $book_image->getClientOriginalExtension();
            $book_image->move('book', $book_image_name);
            $data->book_img = $book_image_name;
        }

        if ($auther_image) {
            $auther_image_name = time() . '.' . $auther_image->getClientOriginalExtension();
            $auther_image->move('auther', $auther_image_name);
            $data->auther_img = $auther_image_name;
        }

        $data->save();
        return redirect('/show_book')->with('message', 'Book Updated Successfully');
    }

    public function borrow_request()
    {
        $data = Borrow::all();
        return view('admin.borrow_request', compact('data'));
    }

    public function approve_book($id)
    {
        $data = Borrow::find($id);
        $status = $data->status;

        if ($status == 'approved') {
            return redirect()->back();
        } else {
            $data->status = 'approved';
            $data->save();

            $bookid = $data->book_id;
            $book = Book::find($bookid);
            $book_qty = $book->quantity - 1;
            $book->quantity = $book_qty;
            $book->save();

            return redirect()->back();
        }
    }

    public function return_book($id)
    {
        $data = Borrow::find($id);
        $status = $data->status;

        if ($status == 'returned') {
            return redirect()->back();
        } else {
            $data->status = 'returned';
            $data->save();

            $bookid = $data->book_id;
            $book = Book::find($bookid);
            $book_qty = $book->quantity + 1;
            $book->quantity = $book_qty;
            $book->save();

            return redirect()->back();
        }
    }

    public function rejected_book($id)
    {
        $data = Borrow::find($id);
        $data->status = "rejected";
        $data->save();

        return redirect()->back();
    }

    public function googlepage()
    {
        return Socialite::driver('google')->redirect();
    }

    public function googlepagecallback()
    {
        try {
            $user = Socialite::driver('google')->user();
            $finduser = User::where('google_id', $user->id)->first();

            if ($finduser) {
                Auth::login($finduser);
                return redirect()->intended('home');
            } else {
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id' => $user->id,
                    'password' => bcrypt('123456dummy')
                ]);

                Auth::login($newUser);
                return redirect()->intended('home');
            }
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
