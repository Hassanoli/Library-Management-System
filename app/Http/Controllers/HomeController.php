<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Borrow;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    public function index()
    {
        $data = Book::all();
        return view('home.index', compact('data'));
    }

    public function book_details($id)
    {
        $data = Book::find($id);
        return view('home.book_details', compact('data'));
    }

    public function borrow_books($id)
    {
        $data = Book::find($id);
        $book_id = $id;
        $quantity = $data->quantity;

        if ($quantity >= 1) {
            if (Auth::id()) {
                $user_id = Auth::user()->id;

                $borrow = new Borrow;
                $borrow->book_id = $book_id;
                $borrow->user_id = $user_id;
                $borrow->status = 'Applied';
                $borrow->save();

                return redirect()->back()->with('message', 'A Request Is Sent To Admin To Borrow This Book');
            } else {
                return redirect('/login');
            }
        } else {
            return redirect()->back()->with('message', 'Not enough books available');
        }
    }

    public function book_history()
    {
        $user_id = Auth::user()->id;
        $data = Borrow::where('user_id', '=', $user_id)->get();
        return view('home.book_history', compact('data'));
    }

    public function cancel_req($id)
    {
        $data = Borrow::find($id);
        $data->delete();

        return Redirect()->back()->with('message', 'Book Borrow Request Cancelled Successfully');
    }

    public function explore()
    {
        $category = Category::all();
        $data = Book::all();

        return view('home.explore', compact('data', 'category'));
    }

    public function search(Request $request)
    {
        $category = Category::all();
        $search = $request->search;

        $data = Book::where('title', 'LIKE', '%' . $search . '%')
            ->orWhere('auther_name', 'LIKE', '%' . $search . '%')
            ->get();

        return view('home.explore', compact('data', 'category'));
    }

    public function cat_search($id)
    {
        $category = Category::all();
        $data = Book::where('category_id', $id)->get();

        return view('home.explore', compact('data', 'category'));
    }

    public function details()
    {
        return view('home.details');
    }
}
