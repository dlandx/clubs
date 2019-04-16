<?php

namespace App\Http\Controllers;

//use App\Admins;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class AdminController extends Controller
{
/*    
    // Traits 
    use AuthenticatesUsers;
    
    // Indicamos el form de admins
    protected $loginView = "admin.login";
   
    // Indicamos el guard
    protected $guard = 'admins';
*/
    
  /*
   public function showLoginForm() {
       return view('admin.login');
   }    
   public function login() {
   }
   */
   
    
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
   public function index()
   {
       return view("admin");
   }
   
    
//    /**
//     * Display a listing of the resource.
//     *
//     * @return \Illuminate\Http\Response
//     */
//    public function index()
//    {
//        //
//    }
//
//    /**
//     * Show the form for creating a new resource.
//     *
//     * @return \Illuminate\Http\Response
//     */
//    public function create()
//    {
//        //
//    }
//
//    /**
//     * Store a newly created resource in storage.
//     *
//     * @param  \Illuminate\Http\Request  $request
//     * @return \Illuminate\Http\Response
//     */
//    public function store(Request $request)
//    {
//        //
//    }
//
//    /**
//     * Display the specified resource.
//     *
//     * @param  \App\Admins  $admins
//     * @return \Illuminate\Http\Response
//     */
//    public function show(Admins $admins)
//    {
//        //
//    }
//
//    /**
//     * Show the form for editing the specified resource.
//     *
//     * @param  \App\Admins  $admins
//     * @return \Illuminate\Http\Response
//     */
//    public function edit(Admins $admins)
//    {
//        //
//    }
//
//    /**
//     * Update the specified resource in storage.
//     *
//     * @param  \Illuminate\Http\Request  $request
//     * @param  \App\Admins  $admins
//     * @return \Illuminate\Http\Response
//     */
//    public function update(Request $request, Admins $admins)
//    {
//        //
//    }
//
//    /**
//     * Remove the specified resource from storage.
//     *
//     * @param  \App\Admins  $admins
//     * @return \Illuminate\Http\Response
//     */
//    public function destroy(Admins $admins)
//    {
//        //
//    }
}
