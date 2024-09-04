<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    public function addToWishlist(Request $request)
    {
        $wishlist = new Wishlist();
        $wishlist->user_id = Auth::id();
        $wishlist->movie_id = $request->movie_id;
        $wishlist->save();

        return response()->json(['message' => 'Movie added to wishlist']);
    }

    public function removeFromWishlist($id)
    {
        $wishlist = Wishlist::where('user_id', Auth::id())->where('movie_id', $id)->first();
        if ($wishlist) {
            $wishlist->delete();
            return response()->json(['message' => 'Movie removed from wishlist']);
        }
        return response()->json(['message' => 'Movie not found in wishlist'], 404);
    }

    public function getWishlist()
    {
        $wishlist = Wishlist::where('user_id', Auth::id())->get();
        return response()->json($wishlist);
    }
}
