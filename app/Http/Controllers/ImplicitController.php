<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImplicitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $myclass;

    public function __construct(\MyClass $myclass) {
        $this->myclass = $myclass;
    }

    public function index()
    {
        dd($this->myclass);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
   * Responds to requests to GET /test
   */
   public function getIndex(){
      echo 'index method';
   }
   
   /**
   * Responds to requests to GET /test/show/1
   */
   public function getShow($id){
      echo 'show method';
   }
   
   /**
   * Responds to requests to GET /test/admin-profile
   */
   public function getAdminProfile(){
      echo 'admin profile method';
   }
   
   /**
   * Responds to requests to POST /test/profile
   */
   public function postProfile(){
      echo 'profile method';
   }
}
