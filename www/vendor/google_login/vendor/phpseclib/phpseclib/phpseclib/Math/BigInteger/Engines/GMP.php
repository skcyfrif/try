/**
 * GMP BigInteger Engine
 *
 * PHP version 5 and 7
 *
 * @category  Math
 * @package   BigInteger
 * @author    Jim Wigginton <terrafrost@php.net>
 * @copyright 2017 Jim Wigginton
 * @license   http://www.opensource.org/licenses/mit-license.html  MIT License
 * @link      http://pear.php.net/package/Math_BigInteger
 */;;;/**
 * GMP Engine.
 *
 * @package GMP
 * @author  Jim Wigginton <terrafrost@php.net>
 * @access  public
 */{/**
     * Can Bitwise operations be done fast?
     *
     * @see parent::bitwise_leftRotate()
     * @see parent::bitwise_rightRotate()
     * @access protected
     */=;/**
     * Engine Directory
     *
     * @see parent::setModExpEngine
     * @access protected
     */=;/**
     * Modular Exponentiation Engine
     *
     * @var string
     */;/**
     * Engine Validity Flag
     *
     * @var bool
     */;/**
     * BigInteger(0)
     *
     * @var \phpseclib3\Math\BigInteger\Engines\GMP
     */;/**
     * BigInteger(1)
     *
     * @var \phpseclib3\Math\BigInteger\Engines\GMP
     */;/**
     * BigInteger(2)
     *
     * @var \phpseclib3\Math\BigInteger\Engines\GMP
     */;/**
     * Primes > 2 and < 1000
     *
     * Unused for GMP Engine
     *
     * @var mixed
     */;/**
     * Test for engine validity
     *
     * @see parent::__construct()
     * @return bool
     */(){();}/**
     * Default constructor
     *
     * @param mixed $x integer Base-10 number or base-$base number if $base set.
     * @param int $base
     * @see parent::__construct()
     * @return \phpseclib3\Math\BigInteger\Engines\GMP
     */(=,=){(!()){=();}(!){();}(){=;;}=();(,);}/**
     * Initialize a GMP BigInteger Engine instance
     *
     * @param int $base
     * @see parent::__construct()
     */(){(()){:=();(){=-;};:=?.:.;=();;:=(()?:);}}/**
     * Converts a BigInteger to a base-10 number.
     *
     * @return string
     */(){;}/**
     * Converts a BigInteger to a bit string (eg. base-2).
     *
     * Negative numbers are saved as positive numbers, unless $twos_compliment is set to true, at which point, they're
     * saved as two's compliment.
     *
     * @param bool $twos_compliment
     * @return string
     */(=){=();=((,),);(>){=(,-);}((())>){.;};}/**
     * Converts a BigInteger to a byte string (eg. base-256).
     *
     * @param bool $twos_compliment
     * @return string
     */(=){(){();}((,())){>?((),(+)):;}=();>?((,,(),),-()):(,());}/**
     * Adds two BigIntegers.
     *
     * @param GMP $y
     * @return GMP
     */(){=();=+;();}/**
     * Subtracts two BigIntegers.
     *
     * @param GMP $y
     * @return GMP
     */(){=();=-;();}/**
     * Multiplies two BigIntegers.
     *
     * @param GMP $x
     * @return GMP
     */(){=();=*;();}/**
     * Divides two BigIntegers.
     *
     * Returns an array whose first element contains the quotient and whose second element contains the
     * "common residue".  If the remainder would be positive, the "common residue" and the remainder are the
     * same.  If the remainder would be negative, the "common residue" is equal to the sum of the remainder
     * and the divisor (basically, the "common residue" is the first positive modulo).
     *
     * @param GMP $y
     * @return GMP
     */(){=();=();(,)=(,);(()<){=+();}[(),()];}/**
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
     * @param GMP $y
     * @return int in case < 0 if $this is less than $y; > 0 if $this is greater than $y, and 0 if they are equal.
     * @access public
     * @see self::equals()
     */(){=(,);(<-){=-;}(>){=;};}/**
     * Tests the equality of two numbers.
     *
     * If you need to see if one number is greater than or less than another number, use BigInteger::compare()
     *
     * @param GMP $x
     * @return bool
     */(){;}/**
     * Calculates modular inverses.
     *
     * Say you have (30 mod 17 * x mod 17) mod 17 == 1.  x can be found using modular inverses.
     *
     * @param GMP $n
     * @return false|GMP
     */(){=();=(,);?:();}/**
     * Calculates the greatest common divisor and Bezout's identity.
     *
     * Say you have 693 and 609.  The GCD is 21.  Bezout's identity states that there exist integers x and y such that
     * 693*x + 609*y == 21.  In point of fact, there are actually an infinite number of x and y combinations and which
     * combination is returned is dependent upon which mode is in use.  See
     * {@link http://en.wikipedia.org/wiki/B%C3%A9zout%27s_identity Bezout's identity - Wikipedia} for more information.
     *
     * @param \phpseclib3\Math\BigInteger\Engines\GMP $n
     * @return \phpseclib3\Math\BigInteger\Engines\GMP[]
     */(){((,));[(()),(()),(())];}/**
     * Calculates the greatest common divisor
     *
     * Say you have 693 and 609.  The GCD is 21.
     *
     * @param GMP $n
     * @return GMP
     */(){=(,);(());}/**
     * Absolute value.
     *
     * @return \phpseclib3\Math\BigInteger\Engines\GMP
     * @access public
     */(){=();=();;}/**
     * Logical And
     *
     * @param GMP $x
     * @return GMP
     */(){=();=&;();}/**
     * Logical Or
     *
     * @param GMP $x
     * @return GMP
     */(){=();=|;();}/**
     * Logical Exclusive Or
     *
     * @param GMP $x
     * @return GMP
     */(){=();=^;();}/**
     * Logical Right Shift
     *
     * Shifts BigInteger's by $shift bits, effectively dividing by 2**$shift.
     *
     * @param int $shift
     * @return \phpseclib3\Math\BigInteger\Engines\GMP
     */(){// 0xFFFFFFFF >> 2 == -1 (on 32-bit systems)
// gmp_init('0xFFFFFFFF') >> 2 == gmp_init('0x3FFFFFFF')
=();=;();}/**
     * Logical Left Shift
     *
     * Shifts BigInteger's by $shift bits, effectively multiplying by 2**$shift.
     *
     * @param int $shift
     * @return \phpseclib3\Math\BigInteger\Engines\GMP
     */(){=();=;();}/**
     * Performs modular exponentiation.
     *
     * @param GMP $e
     * @param GMP $n
     * @return GMP
     */(,){(,);}/**
     * Performs modular exponentiation.
     *
     * Alias for modPow().
     *
     * @param GMP $e
     * @param GMP $n
     * @return GMP
     */(,){(,);}/**
     * Performs modular exponentiation.
     *
     * @param GMP $e
     * @param GMP $n
     * @return GMP
     */(,){=;(,,);}/**
     * Normalize
     *
     * Removes leading zeros and truncates (if necessary) to maintain the appropriate precision
     *
     * @param GMP $result
     * @return GMP
     */(){();=;=;(){=<;(){=-;}=&;(){=-;}};}/**
     * Performs some post-processing for randomRangePrime
     *
     * @param Engine $x
     * @param Engine $min
     * @param Engine $max
     * @return GMP
     */(,,){=();(){();}(){=(-);}(,);}/**
     * Generate a random prime number between a range
     *
     * If there's not a prime within the given range, false will be returned.
     *
     * @param GMP $min
     * @param GMP $max
     * @return false|GMP
     */(,){(,);}/**
     * Generate a random number between a range
     *
     * Returns a random number between $min and $max where $min and $max
     * can be defined using one of the two methods:
     *
     * BigInteger::randomRange($min, $max)
     * BigInteger::randomRange($max, $min)
     *
     * @param GMP $min
     * @param GMP $max
     * @return GMP
     */(,){(,);}/**
     * Make the current number odd
     *
     * If the current number is odd it'll be unchanged.  If it's even, one will be added to it.
     *
     * @see self::randomPrime()
     */(){(,);}/**
     * Tests Primality
     *
     * @param int $t
     * @return bool
     */(){(,);}/**
     * Calculates the nth root of a biginteger.
     *
     * Returns the nth root of a positive biginteger, where n defaults to 2
     *
     * @param int $n
     * @return GMP
     */(){=();=(,);();}/**
     * Performs exponentiation.
     *
     * @param GMP $n
     * @return GMP
     */(){=();=;();}/**
     * Return the minimum BigInteger between an arbitrary number of BigIntegers.
     *
     * @param GMP ...$nums
     * @return GMP
     */(){();}/**
     * Return the maximum BigInteger between an arbitrary number of BigIntegers.
     *
     * @param GMP ...$nums
     * @return GMP
     */(){();}/**
     * Tests BigInteger to see if it is between two integers, inclusive
     *
     * @param GMP $min
     * @param GMP $max
     * @return bool
     */(,){()();}/**
     * Create Recurring Modulo Function
     *
     * Sometimes it may be desirable to do repeated modulos with the same number outside of
     * modular exponentiation
     *
     * @return callable
     */(){=;=()(){(%);};;}/**
     * Scan for 1 and right shift by that amount
     *
     * ie. $s = gmp_scan1($n, 0) and $r = gmp_div_q($n, gmp_pow(gmp_init('2'), $s));
     *
     * @param GMP $r
     * @return int
     */(){=(,);;;}/**
     * Is Odd?
     *
     * @return boolean
     */(){(,);}/**
     * Tests if a bit is set
     *
     * @return boolean
     */(){(,);}/**
     * Is Negative?
     *
     * @return boolean
     */(){()-;}/**
     * Negate
     *
     * Given $k, returns -$k
     *
     * @return GMP
     */(){=;=-;;}}