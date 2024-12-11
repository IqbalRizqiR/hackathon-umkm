<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartItem;
use App\Models\CartItems;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
        ]);

        $user = Auth::user();
        $cart = Cart::firstOrCreate(['user_id' => $user->id]);

        $product = Product::findOrFail($request->product_id);

        $cartItem = $cart->items()->where('product_id', $product->id)->first();

        if ($cartItem) {
            $cartItem->quantity += $request->quantity;
            $cartItem->save();
        } else {
            $cart->items()->create([
                'product_id' => $product->id,
                'quantity' => $request->quantity,
            ]);
        }

        return response()->json(['message' => 'Product added to cart successfully.']);
    }

    public function viewCart()
    {
        $user = Auth::user();
        $cart = $user->cart;

        if (!$cart) {
            return view('cart', ['items' => []]);
        }

        $items = $cart->items()->with('product')->get();

        return view('pages.user.cart', compact('items'));
    }

    public function removeFromCart(Request $request)
    {
        $request->validate([
            'cart_id' => 'required|exists:carts,id',
            'product_id' => 'required|exists:cart_items,product_id',
        ]);

        $cartItem = CartItems::where('cart_id',$request->cart_id)->where('product_id', $request->product_id)->first();

        // Check if the cart item belongs to the authenticated user
        if ($cartItem->cart->user_id !== Auth::id()) {
            return response()->json(['message' => 'Unauthorized'], 403);
        }

        $cartItem->delete();

        return response()->json(['message' => 'Product removed from cart successfully']);
    }

    public function updateCartItemQuantity(Request $request)
    {
        $request->validate([
            'cart_id' => 'required|exists:carts,id',
            'product_id' => 'required|exists:cart_items,product_id',
            'quantity' => 'required|integer|min:1',
        ]);

        $cartItem = CartItems::where('cart_id',$request->cart_id)->where('product_id', $request->product_id)->first();

        // Check if the cart item belongs to the authenticated user
        if ($cartItem->cart->user_id !== Auth::id()) {
            return response()->json(['message' => 'Unauthorized'], 403);
        }

        $cartItem->quantity = $request->quantity;
        $cartItem->save();

        return response()->json(['message' => 'Cart item quantity updated successfully']);
    }
}

