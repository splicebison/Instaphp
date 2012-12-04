<?php
namespace Instaphp;

/**
 * Instaphp
 * 
 * Copyright (c) 2011 randy sesser <randy@instaphp.com>
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 * 
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 * 
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 * 
 * @author randy sesser <randy@instaphp.com>
 * @copyright 2011, randy sesser
 * @license http://www.opensource.org/licenses/mit-license The MIT License
 * @package Instaphp
 * @filesource
 */

class Error
{
    /**
     * Error Type
     * @var string
     * @access public
     */
    public $type = null;
    /**
     * Error Code
     * @var int
     * @access public
     */
    public $code = null;
    /**
     * Error Message
     * @var string
     * @access public
     */
    public $message = null;
	/**
	 * The url associated with this error
	 *
	 * @var string
	 * @access public
	 **/
	public $url = null;
	
    /**
     * The constructor constructs
     * @param string $type The error type
     * @param int $code The error code
     * @param string $message The error message
     * @return Error
     * @access public
     */
    public function __construct($type = null, $code = null, $message = null, $url = null)
    {
        $this->type = $type;
        $this->code = $code;
        $this->message = $message;
		$this->url = $url;
    }
}