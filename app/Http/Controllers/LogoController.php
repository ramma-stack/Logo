<?php

namespace App\Http\Controllers;

use App\Models\Mens;
use App\Models\Cart;
use App\Models\Humans;
use App\Models\User;
use App\Models\subscribe;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Http\Request;
use Illuminate\Foundation\Exceptions\Handler;


class LogoController extends Controller
{

    // public function __construct()
    // {
    //     if (Auth::check()) {
    //         echo "hello";
    //         $this->middleware('verified')->only(['index']);
    //     }
    // }

    public function index()
    {
        new LogoController();
        $guest = Cookie::has('guest') ? cookie::get('guest') : cookie::queue('guest', rand() . rand(), 4500);
        $MensProducts = Mens::orderBy('id', 'desc')->paginate(4);
        $WomenProducts = Humans::orderBy('id', 'desc')->paginate(4);
        return view('welcome', ['MensProducts' => $MensProducts, 'guest' => $guest, 'WomenProducts' => $WomenProducts]);
    }

    public function MensCollection()
    {
        $MensCollect = Mens::orderBy('id', 'desc')->paginate(5);
        return view('mens.mensCollection', ['MensCollect' => $MensCollect]);
    }

    public function humansCollection()
    {
        $HumansCollect = Humans::orderBy('id', 'desc')->paginate(5);
        return view('humans.humansCollection', ['HumansCollect' => $HumansCollect]);
    }

    public function mensDetails($id)
    {
        $mensDetails = Mens::findOrFail($id);
        $guest = cookie::get('guest');
        $direct = 'MensCollection';
        return view('details', ['mensDetails' => $mensDetails, 'guest' => $guest, 'direct' => $direct]);
    }

    public function humansDetails($id)
    {
        $humansDetails = Humans::findOrFail($id);
        $guest = cookie::get('guest');
        $direct = 'HumansCollection';
        return view('details', ['humansDetails' => $humansDetails, 'guest' => $guest, 'direct' => $direct]);
    }

    public function addDetails($id)
    {
        $guestid = cookie::get('guest');
        $postid = $id;
        $quantity = request('quantity');
        $color = request('colors');
        $size = request('sizes');

        if (empty($guestid) || empty($postid) || empty($color) || empty($size)) {
            return redirect('/cart')->with(['fail' => 'fail']);
        } else {
            $cart = new cart();
            $cart->guestid = $guestid;
            $cart->postid = $postid;
            $cart->color = $color;
            $cart->size = $size;
            $cart->quantity = $quantity;
            $cart->type = "men";
            $cart->checkout = 0;
            $cart->save();
            return redirect('/cart')->with(['success' => 'success']);
        }
    }

    public function cartOrder()
    {
        $guest = cookie::get('guest');
        $getCart = Cart::where('guestid', $guest)->get();
        $hasCart = Cart::where('guestid', $guest)->count();
        $MensAndCart = Mens::join('cart', 'mens.id', '=', 'cart.postid')->where('cart.guestid', $guest)->where('cart.type', 'men')->get();
        $HumansAndCart = Humans::join('cart', 'humans.id', '=', 'cart.postid')->where('cart.guestid', $guest)->where('cart.type', 'women')->get();
        return view('cart.cart', ['hasCart' => $hasCart, 'getCart' => $getCart, 'MensAndCart' => $MensAndCart, 'HumansAndCart' => $HumansAndCart]);
    }

    public function postApply()
    {
        $guestid = Cookie::get('guest');
        $updateCheck = Cart::where(['guestid' => $guestid])->update(['checkout' => 1]);
        if ($updateCheck == true) {
            return redirect('/cart/apply');
        }
    }

    public function itemCartRemove($id, $guestid)
    {
        $delete = Cart::where('id', $id)->where('guestid', $guestid)->delete();
        if ($delete == true) {
            return redirect('/cart')->with('deleteItem', 'Delete Success!');
        } else {
            return redirect('/cart')->with('deleteItem', 'Delete Fail!');
        }
    }

    public function profile()
    {
        $information = Auth::user();
        return view('profile', ['info' => $information]);
    }

    public function updatePro()
    {
        $info = Auth::user();
        $email = request('email');
        $name = request('name');
        if (empty($email) || empty($name)) {
            return redirect('/profile')->with(['mail' => 'Update Fail,Valeus Is Empty!']);
        } else {
            if ($info->email == $email && $info->name == $name) {
                return redirect('/profile')->with(['mail' => 'Update Fail, Values is Same Thing of Before!']);
            } else {
                $update = User::where('id', $info->id)->update(["email" => $email, "name" => $name]);
                if ($update == true) {
                    return redirect('/profile')->with(['mail' => 'Update Success!']);
                }
            }
        }
    }

    public function subscribe(Request $request)
    {
        try {
            $subscribe = new subscribe();
            $subscribe->email = request('email');
            // $subscribe->save();
            return redirect('/')->with('seccess', 'Your Email Subscirbed, Thanks For Subscirbe Us!');
        } catch (\Exception) {
            return redirect('/')->with('seccess', 'Your Email Is Dublicated, Please Use Another Email!');
        }
    }
}
