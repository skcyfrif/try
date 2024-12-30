/**
 * Modular Exponentiation Engine
 *
 * PHP version 5 and 7
 *
 * @category  Math
 * @package   BigInteger
 * @author    Jim Wigginton <terrafrost@php.net>
 * @copyright 2017 Jim Wigginton
 * @license   http://www.opensource.org/licenses/mit-license.html  MIT License
 * @link      http://pear.php.net/package/Math_BigInteger
 */;;/**
 * Sliding Window Exponentiation Engine
 *
 * @package PHP
 * @author  Jim Wigginton <terrafrost@php.net>
 * @access  public
 */{/**
     * Cache constants
     *
     * $cache[self::VARIABLE] tells us whether or not the cached data is still valid.
     *
     * @access private
     */=;/**
     * $cache[self::DATA] contains the cached data.
     *
     * @access private
     */=;/**
     * Test for engine validity
     *
     * @return bool
     */(){;}/**
     * Performs modular exponentiation.
     *
     * @param \phpseclib3\Math\BigInteger\Engines\BCMath $x
     * @param \phpseclib3\Math\BigInteger\Engines\BCMath $e
     * @param \phpseclib3\Math\BigInteger\Engines\BCMath $n
     * @param string $class
     * @return \phpseclib3\Math\BigInteger\Engines\BCMath
     */(,,,){(()){=();=;();}((,,,));}/**
     * Modular reduction preparation
     *
     * @param string $x
     * @param string $n
     * @param string $class
     * @see self::slidingWindow()
     * @return string
     */(,,){(,);}/**
     * Modular multiply
     *
     * @param string $x
     * @param string $y
     * @param string $n
     * @param string $class
     * @see self::slidingWindow()
     * @return string
     */(,,,){((,),);}/**
     * Modular square
     *
     * @param string $x
     * @param string $n
     * @param string $class
     * @see self::slidingWindow()
     * @return string
     */(,,){((,),);}}