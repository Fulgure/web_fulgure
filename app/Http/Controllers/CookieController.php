<?php

namespace App\Http\Controllers;

use App\Models\CookieConsent;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CookieController extends Controller
{
    public function index_cookie(Request $request)
    {
        if(CookieConsent::where('ip_address', $request->ip())->doesntExist()) {
            $cookieManager = new CookieConsent();
        } else {
            $cookieManager = CookieConsent::where('ip_address', $request->ip())->first();
        }


        $cookieManager['ip_address'] = $request->ip();
        $cookieManager['identifier'] = Str::uuid();
        $cookieManager['analytics'] = "accepted";
        $cookieManager['marketing'] = $request->input('marketing');
        $cookieManager['personalisation'] = $request->input('personalisation');

        try {
            $cookieManager->save();
            return response()->json([
                'status' => 'success',
                'message' => 'Cookie saved successfully'
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage()
            ], 500);
        }
    }
}
