<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shoe;
use App\Models\Cart;
use App\Models\User;
use Illuminate\Support\Facades\DB;


use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{ 

    public function removeCartItem($id)
{
    $cartItem = Cart::findOrFail($id);
    
    // Check if the authenticated user owns the cart item
    if ($cartItem->user_id !== auth()->user()->id) {
        abort(403, 'Unauthorized action.');
    }
    
    $cartItem->delete();
    
    return redirect()->route('cart.show')->with('success', 'Item removed from cart.');
}

    public function show()
    {
        $user = Auth::user();
        $cartItems = $user->cartItems()->with('shoe')->get();
        $cartItemCount = $cartItems->count();

        return view('cart.show', compact('cartItems', 'cartItemCount'));
    }

  
    
public function getAdminCartItemCount()
{
    $cartItemCount = Cart::count();

    return $cartItemCount;
}
    
    
    
    
    

    public function add(Request $request, $shoeId)
    {
        $user = Auth::user();

        $cartItem = Cart::where('user_id', $user->id)
            ->where('shoe_id', $shoeId)
            ->where('size', $request->size)
            ->first();

        if ($cartItem) {
            $cartItem->increment('quantity');
        } else {
            $shoe = Shoe::findOrFail($shoeId);

            Cart::create([
                'user_id' => $user->id,
                'shoe_id' => $shoe->id,
                'size' => $request->size,
                'quantity' => $request->quantity,
            ]);
        }
        $request->session()->flash('success', 'Item added to cart successfully.');

    return back();
    }
}
