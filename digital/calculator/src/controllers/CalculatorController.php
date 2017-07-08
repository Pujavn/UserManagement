<?php

namespace Digital\Calculator\Controllers;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use App\Http\Controllers\Controller;

/**
 * Description of UserController
 *
 * @author Puja
 */
class CalculatorController extends Controller {

	/**
	 * Addition of 2 numbers
	 */
	public function add($a, $b) {
		$result = $a + $b;
		return view('calculator:add', compact('result'));
	}

	/**
	 * Subtraction of 2 numbers
	 */
	public function subtract($a, $b) {
		echo $a - $b;
	}

}
