<?php


namespace App\Http\Controllers;
use App\Thread;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ThreadsController extends Controller
{
    /**
     * @return Response
     */
    public function index(){

        $threads = Thread::latest()->get();

        return view('threads.index', compact('threads'));
    }
}
