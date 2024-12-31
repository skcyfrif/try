/**
 * Pure-PHP 64-bit BigInteger Engine
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
 * Pure-PHP 64-bit Engine.
 *
 * Uses 64-bit integers if int size is 8 bits
 *
 * @package PHP
 * @author  Jim Wigginton <terrafrost@php.net>
 * @access  public
 */{// Constants used by PHP.php
=;=;=;=;/**
     * MAX10 in greatest MAX10LEN satisfying
     * MAX10 = 10**MAX10LEN <= 2**BASE.
     */=;/**
     * MAX10LEN in greatest MAX10LEN satisfying
     * MAX10 = 10**MAX10LEN <= 2**BASE.
     */=;=;/**#@-*//**
     * Modular Exponentiation Engine
     *
     * @var string
     */;/**
     * Engine Validity Flag
     *
     * @var bool
     */;/**
     * Primes > 2 and < 1000
     *
     * @var array
     */;/**
     * BigInteger(0)
     *
     * @var \phpseclib3\Math\BigInteger\Engines\PHP64
     */;/**
     * BigInteger(1)
     *
     * @var \phpseclib3\Math\BigInteger\Engines\PHP64
     */;/**
     * BigInteger(2)
     *
     * @var \phpseclib3\Math\BigInteger\Engines\PHP64
     */;/**
     * Initialize a PHP64 BigInteger Engine instance
     *
     * @param int $base
     * @see parent::initialize()
     */(){(-){();}=;=[];=&;=();(!){;}(){;(<){(-){;}=(,,+);=(,,,);(){;}=;}(,)=(,(,,));=()&;(!){;;}{=-;;=-;()-;=>?([-]):;()&;}[]=;}(()){();}();}/**
     * Test for engine validity
     *
     * @see parent::__construct()
     * @return bool
     */(){;}/**
     * Adds two BigIntegers.
     *
     * @param PHP64 $y
     * @return PHP64
     */(){=(,,,);();}/**
     * Subtracts two BigIntegers.
     *
     * @param PHP64 $y
     * @return PHP64
     */(){=(,,,);();}/**
     * Multiplies two BigIntegers.
     *
     * @param PHP64 $y
     * @return PHP64
     */(){=(,,,);();}/**
     * Divides two BigIntegers.
     *
     * Returns an array whose first element contains the quotient and whose second element contains the
     * "common residue".  If the remainder would be positive, the "common residue" and the remainder are the
     * same.  If the remainder would be negative, the "common residue" is equal to the sum of the remainder
     * and the divisor (basically, the "common residue" is the first positive modulo).
     *
     * @param PHP64 $y
     * @return PHP64
     */(){();}/**
     * Calculates modular inverses.
     *
     * Say you have (30 mod 17 * x mod 17) mod 17 == 1.  x can be found using modular inverses.
     * @param PHP64 $n
     * @return false|PHP64
     */(){();}/**
     * Calculates modular inverses.
     *
     * Say you have (30 mod 17 * x mod 17) mod 17 == 1.  x can be found using modular inverses.
     * @param PHP64 $n
     * @return PHP64[]
     */(){();}/**
     * Calculates the greatest common divisor
     *
     * Say you have 693 and 609.  The GCD is 21.
     *
     * @param PHP64 $n
     * @return PHP64
     */(){()[];}/**
     * Logical And
     *
     * @param PHP64 $x
     * @return PHP64
     */(){();}/**
     * Logical Or
     *
     * @param PHP64 $x
     * @return PHP64
     */(){();}/**
     * Logical Exclusive Or
     *
     * @param PHP64 $x
     * @return PHP64
     */(){();}/**
     * Compares two numbers.
     *
     * Although one might think !$x->compare($y) means $x != $y, it, in fact, means the opposite.  The reason for this is
     * demonstrated thusly:
     *
     * $x  > $y: $x->compare($y)  > 0
     * $x  < $y: $x->compare($y)  < 0
     * $x == $y: $x->compare($y) == 0
     *
     * Note how the same comparison operator is used.  If you want to test for equality, use $x->equals($y).
     *
     * {@internal Could return $this->subtract($x), but that's not as fast as what we do do.}
     *
     * @param PHP64 $y
     * @return int in case < 0 if $this is less than $y; > 0 if $this is greater than $y, and 0 if they are equal.
     * @access public
     * @see self::equals()
     */(){(,,,);}/**
     * Tests the equality of two numbers.
     *
     * If you need to see if one number is greater than or less than another number, use BigInteger::compare()
     *
     * @param PHP64 $x
     * @return bool
     */(){;}/**
     * Performs modular exponentiation.
     *
     * @param PHP64 $e
     * @param PHP64 $n
     * @return PHP64
     */(,){(,);}/**
     * Performs modular exponentiation.
     *
     * Alias for modPow().
     *
     * @param PHP64 $e
     * @param PHP64 $n
     * @return PHP64
     */(,){(,);}/**
     * Generate a random prime number between a range
     *
     * If there's not a prime within the given range, false will be returned.
     *
     * @param PHP64 $min
     * @param PHP64 $max
     * @return false|PHP64
     */(,){(,);}/**
     * Generate a random number between a range
     *
     * Returns a random number between $min and $max where $min and $max
     * can be defined using one of the two methods:
     *
     * BigInteger::randomRange($min, $max)
     * BigInteger::randomRange($max, $min)
     *
     * @param PHP64 $min
     * @param PHP64 $max
     * @return PHP64
     */(,){(,);}/**
     * Performs exponentiation.
     *
     * @param PHP64 $n
     * @return PHP64
     */(){();}/**
     * Return the minimum BigInteger between an arbitrary number of BigIntegers.
     *
     * @param PHP64 ...$nums
     * @return PHP64
     */(){();}/**
     * Return the maximum BigInteger between an arbitrary number of BigIntegers.
     *
     * @param PHP64 ...$nums
     * @return PHP64
     */(){();}/**
     * Tests BigInteger to see if it is between two integers, inclusive
     *
     * @param PHP64 $min
     * @param PHP64 $max
     * @return bool
     */(,){()();}}