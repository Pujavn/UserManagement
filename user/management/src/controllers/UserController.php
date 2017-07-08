<?php

namespace User\Management\Controllers;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 * Description of UserController
 *
 * @author Puja
 */
class UserController extends Controller {

    /**
	 * User index page
	 */
	public function index()
    {
        $msg= 'Welcome to our User Management App nsbdsf';
        return view('userIndex::welcomeUser', compact('msg'));
    }

    /**
     * Shows a form for creating new user object
     */
    public function newAction()
    {
        return view('new::new');
    }
    /**
     * Creates new user
     */
    public function createAction(Request $request)
    {
        var_dump($request);
        echo $request->title;exit;
    }
}
