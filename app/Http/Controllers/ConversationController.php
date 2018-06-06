<?php

namespace App\Http\Controllers;

use App\Conversation;
use Illuminate\Http\Request;
use DB;

class ConversationController extends Controller
{
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$conversations = DB::table('conversations')->get();
        return view('conversations', compact('conversations'));
    }
}
