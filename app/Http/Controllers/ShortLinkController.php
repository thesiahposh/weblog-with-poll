<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShortLinkController extends Controller
{
    public function getCode(Request $request, string $code)
    {
        $shortLink = \App\Models\ShortLink::where('code', $code)->first();
        if($shortLink)
        {
            return redirect($shortLink->link);
        }
        return redirect('/');
    }
}
