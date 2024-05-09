<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactFormEntry;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $validatedData = $request->validate([
            'firstName' => 'required|string|max:20',
            'lastName' => 'required|string|max:20',
            'email' => 'required|email|max:30',
            'productName' => 'required|string|max:20',
            'color' => 'required|string|max:8',
            'message' => 'required|string|min:5',
        ]);
        if (Auth::check()) {
            $productName = $request->input('productName');
            $color = $request->input('color');
            $product = Product::where('product_name', $productName)->where('color', $color)->first();
            if ($product) {
                $productId = $product->id;
            }else {
                $newProduct = Product::create([
                    'product_name' => $productName,
                    'color' => $color,
                ]);
                $productId = $newProduct->id;
            }

            $entry = new ContactFormEntry();
            $entry->first_name = $request->input('firstName');
            $entry->last_name = $request->input('lastName');
            $entry->email = $request->input('email');
            $entry->product_name = $request->input('productName');
            $entry->color = $request->input('color');
            $entry->message = $request->input('message');
            $entry->save();

            return redirect()->route('home')->with('success', 'Your request has been submitted successfully.');
        }else {
            return redirect()->route('login')->with('error', 'You need to be logged in to submit the form.');
        }
    }
}
