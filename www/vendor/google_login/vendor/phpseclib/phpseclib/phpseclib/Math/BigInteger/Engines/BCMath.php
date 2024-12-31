/**
 * BCMath BigInteger Engine
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
 * BCMath Engine.
 *
 * @package BCMath
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
     * @var \phpseclib3\Math\BigInteger\Engines\BCMath
     */;/**
     * BigInteger(1)
     *
     * @var \phpseclib3\Math\BigInteger\Engines\BCMath
     */;/**
     * BigInteger(2)
     *
     * @var \phpseclib3\Math\BigInteger\Engines\BCMath
     */;/**
     * Primes > 2 and < 1000
     *
     * @var array
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
     * @return \phpseclib3\Math\BigInteger\Engines\BCMath
     */(=,=){(!()){=();}(!){();}=;(,);}/**
     * Initialize a BCMath BigInteger Engine instance
     *
     * @param int $base
     * @see parent::__construct()
     */(){(()){:// round $len to the nearest 4
=(()+)&;=(,,(),);=;(=;<;){=(,,);// 4294967296 == 2**32
=(,*([])+((([+]))|(([+]))|([+])),);}(){=.;};:=(()&)?.:;=((),);=?.:;=;;:// explicitly casting $x to a string is necessary, here, since doing $x[0] on -1 yields different
// results then doing it on '-1' does (modInverse does $x[0])
=?:;}}/**
     * Converts a BigInteger to a base-10 number.
     *
     * @return string
     */(){(){;}(,);}/**
     * Converts a BigInteger to a byte string (eg. base-256).
     *
     * @param bool $twos_compliment
     * @return string
     */(=){(){();}=;=;([]){=(,);}((,,)>){=(,);=().().().;=(,,);}>?((,,(),),-()):(,());}/**
     * Adds two BigIntegers.
     *
     * @param BCMath $y
     * @return BCMath
     */(){=();=(,);();}/**
     * Subtracts two BigIntegers.
     *
     * @param BCMath $y
     * @return BCMath
     */(){=();=(,);();}/**
     * Multiplies two BigIntegers.
     *
     * @param BCMath $x
     * @return BCMath
     */(){=();=(,);();}/**
     * Divides two BigIntegers.
     *
     * Returns an array whose first element contains the quotient and whose second element contains the
     * "common residue".  If the remainder would be positive, the "common residue" and the remainder are the
     * same.  If the remainder would be negative, the "common residue" is equal to the sum of the remainder
     * and the divisor (basically, the "common residue" is the first positive modulo).
     *
     * @param BCMath $y
     * @return BCMath
     */(){=();=();=(,,);=(,);([]){=(,[]?(,):,);}[(),()];}/**
     * Calculates modular inverses.
     *
     * Say you have (30 mod 17 * x mod 17) mod 17 == 1.  x can be found using modular inverses.
     *
     * @return false|BCMath
     * @param \phpseclib3\Math\BigInteger\Engines\BCMath $n
     */(){();}/**
     * Calculates the greatest common divisor and Bezout's identity.
     *
     * Say you have 693 and 609.  The GCD is 21.  Bezout's identity states that there exist integers x and y such that
     * 693*x + 609*y == 21.  In point of fact, there are actually an infinite number of x and y combinations and which
     * combination is returned is dependent upon which mode is in use.  See
     * {@link http://en.wikipedia.org/wiki/B%C3%A9zout%27s_identity Bezout's identity - Wikipedia} for more information.
     *
     * @param BCMath $n
     * @return BCMath
     */(){// it might be faster to use the binary xGCD algorithim here, as well, but (1) that algorithim works
// best when the base is a power of 2 and (2) i don't think it'd make much difference, anyway.  as is,
// the basic extended euclidean algorithim is what we're using.
=;=;=;=;=;=;((,,)){=(,,);=;=;=(,(,,),);=;=;=(,(,,),);=;=;=(,(,,),);}[(()),(()),(())];}/**
     * Calculates the greatest common divisor
     *
     * Say you have 693 and 609.  The GCD is 21.
     *
     * @param BCMath $n
     * @return BCMath
     */(){(());/** @var BCMath $gcd */;}/**
     * Absolute value.
     *
     * @return \phpseclib3\Math\BigInteger\Engines\BCMath
     */(){=();=()[]?(,):;;}/**
     * Logical And
     *
     * @param BCMath $x
     * @return BCMath
     */(){();}/**
     * Logical Or
     *
     * @param BCMath $x
     * @return BCMath
     */(){();}/**
     * Logical Exclusive Or
     *
     * @param BCMath $x
     * @return BCMath
     */(){();}/**
     * Logical Right Shift
     *
     * Shifts BigInteger's by $shift bits, effectively dividing by 2**$shift.
     *
     * @param int $shift
     * @return \phpseclib3\Math\BigInteger\Engines\BCMath
     */(){=();=(,(,,),);();}/**
     * Logical Left Shift
     *
     * Shifts BigInteger's by $shift bits, effectively multiplying by 2**$shift.
     *
     * @param int $shift
     * @return \phpseclib3\Math\BigInteger\Engines\BCMath
     */(){=();=(,(,,),);();}/**
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
     * @param BCMath $y
     * @return int in case < 0 if $this is less than $y; > 0 if $this is greater than $y, and 0 if they are equal.
     * @see self::equals()
     */(){(,,);}/**
     * Tests the equality of two numbers.
     *
     * If you need to see if one number is greater than or less than another number, use BigInteger::compare()
     *
     * @param BCMath $x
     * @return bool
     */(){;}/**
     * Performs modular exponentiation.
     *
     * @param BCMath $e
     * @param BCMath $n
     * @return BCMath
     */(,){(,);}/**
     * Performs modular exponentiation.
     *
     * Alias for modPow().
     *
     * @param BCMath $e
     * @param BCMath $n
     * @return BCMath
     */(,){(,);}/**
     * Performs modular exponentiation.
     *
     * @param BCMath $e
     * @param BCMath $n
     * @return BCMath
     */(,){{=;(,,,);}(){(,,,);}}/**
     * Normalize
     *
     * Removes leading zeros and truncates (if necessary) to maintain the appropriate precision
     *
     * @param BCMath $result
     * @return BCMath
     */(){();=;=;(){=(,);};}/**
     * Generate a random prime number between a range
     *
     * If there's not a prime within the given range, false will be returned.
     *
     * @param BCMath $min
     * @param BCMath $max
     * @return false|BCMath
     */(,){(,);}/**
     * Generate a random number between a range
     *
     * Returns a random number between $min and $max where $min and $max
     * can be defined using one of the two methods:
     *
     * BigInteger::randomRange($min, $max)
     * BigInteger::randomRange($max, $min)
     *
     * @param BCMath $min
     * @param BCMath $max
     * @return BCMath
     */(,){(,);}/**
     * Make the current number odd
     *
     * If the current number is odd it'll be unchanged.  If it's even, one will be added to it.
     *
     * @see self::randomPrime()
     */(){(!()){=(,);}}/**
     * Test the number against small primes.
     *
     * @see self::isPrime()
     */(){(){;}(){;}([()-]%){;}=;(){=(,);(){;}};}/**
     * Scan for 1 and right shift by that amount
     *
     * ie. $s = gmp_scan1($n, 0) and $r = gmp_div_q($n, gmp_pow(gmp_init('2'), $s));
     *
     * @see self::isPrime()
     * @param BCMath $r
     * @return int
     */(){=&;=;// if $n was 1, $r would be 0 and this would be an infinite loop, hence our $this->equals(static::$one) check earlier
([()-]%){=(,,);;};}/**
     * Performs exponentiation.
     *
     * @param BCMath $n
     * @return BCMath
     */(){=();=(,);();}/**
     * Return the minimum BigInteger between an arbitrary number of BigIntegers.
     *
     * @param BCMath ...$nums
     * @return BCMath
     */(){();}/**
     * Return the maximum BigInteger between an arbitrary number of BigIntegers.
     *
     * @param BCMath ...$nums
     * @return BCMath
     */(){();}/**
     * Tests BigInteger to see if it is between two integers, inclusive
     *
     * @param BCMath $min
     * @param BCMath $max
     * @return bool
     */(,){()();}/**
     * Set Bitmask
     *
     * @return Engine
     * @param int $bits
     * @see self::setPrecision()
     */(){=();();}/**
     * Is Odd?
     *
     * @return boolean
     */(){[()-]%;}/**
     * Tests if a bit is set
     *
     * @return boolean
     */(){((,(,+,),),(,,),);}/**
     * Is Negative?
     *
     * @return boolean
     */(){()[];}/**
     * Negate
     *
     * Given $k, returns -$k
     *
     * @return BCMath
     */(){=;(!()){;}=[]?(,):.;;}}