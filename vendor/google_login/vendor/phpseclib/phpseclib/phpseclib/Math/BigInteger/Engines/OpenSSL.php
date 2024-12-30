/**
 * OpenSSL Modular Exponentiation Engine
 *
 * PHP version 5 and 7
 *
 * @category  Math
 * @package   BigInteger
 * @author    Jim Wigginton <terrafrost@php.net>
 * @copyright 2017 Jim Wigginton
 * @license   http://www.opensource.org/licenses/mit-license.html  MIT License
 * @link      http://pear.php.net/package/Math_BigInteger
 */;;;;/**
 * OpenSSL Modular Exponentiation Engine
 *
 * @package Engines
 * @author  Jim Wigginton <terrafrost@php.net>
 * @access  public
 */{/**
     * Test for engine validity
     *
     * @return bool
     */(){();}/**
     * Performs modular exponentiation.
     *
     * @param Engine $x
     * @param Engine $e
     * @param Engine $n
     * @return Engine
     */(,,){(()<()>){();}=((),());=((),(),,);// this is easily prone to failure. if the modulo is a multiple of 2 or 3 or whatever it
// won't work and you'll get a "failure: error:0906D06C:PEM routines:PEM_read_bio:no start line"
// error. i suppose, for even numbers, we could do what PHP\Montgomery.php does, but then what
// about odd numbers divisible by 3, by 5, etc?
(!(,,,)){(());}=();(,);}}