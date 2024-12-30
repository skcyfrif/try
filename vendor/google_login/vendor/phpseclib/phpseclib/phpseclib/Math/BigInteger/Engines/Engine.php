/**
 * Base BigInteger Engine
 *
 * PHP version 5 and 7
 *
 * @category  Math
 * @package   BigInteger
 * @author    Jim Wigginton <terrafrost@php.net>
 * @copyright 2017 Jim Wigginton
 * @license   http://www.opensource.org/licenses/mit-license.html  MIT License
 * @link      http://pear.php.net/package/Math_BigInteger
 */;;;;;;/**
 * Base Engine.
 *
 * @package Engine
 * @author  Jim Wigginton <terrafrost@php.net>
 * @access  public
 */{/**
     * Holds the BigInteger's value
     *
     * @var mixed
     */;/**
     * Holds the BigInteger's sign
     *
     * @var bool
     */;/**
     * Precision
     *
     * @see static::setPrecision()
     */=-;/**
     * Precision Bitmask
     *
     * @see static::setPrecision()
     */=;/**
     * Recurring Modulo Function
     *
     * @var callable
     */;/**
     * Default constructor
     *
     * @param mixed $x integer Base-10 number or base-$base number if $base set.
     * @param int $base
     */(,){(!()){=[,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,];=();=();=();}// '0' counts as empty() but when the base is 256 '0' is equal to ord('0') or 48
// '0' is the only value like this per http://php.net/empty
(()(())){;}(){-::(-(([])&)){=~;=;}{=;=;}();(){=(());=;};-::(>[]){=;=(,);}=(,,);=;(<([])){==;=(~());}=;();(){=(());=;};-::// (?<!^)(?:-).*: find any -'s that aren't at the beginning and then any characters that follow that
// (?<=^|-)0*: find any 0's that are preceded by the start of the string or by a - (ie. octals)
// [^-0-9].*: find any non-numeric characters and then any characters that follow that
=(,,);(!()){=;}();;-::(>[]){=;=(,);}=(,,);=((),*);// ie. either -16 or +16
=;(){=;};:// base not supported, so we'll let $this == 0
}}/**
     * Sets engine type.
     *
     * Throws an exception if the type is invalid
     *
     * @param string $engine
     */(){=...;(!()!(,)){("");}(!()){("");}=;}/**
     * Converts a BigInteger to a byte string (eg. base-256).
     *
     * Negative numbers are saved as positive numbers, unless $twos_compliment is set to true, at which point, they're
     * saved as two's compliment.
     * @return string
     */(){=(());(){>?((),(+)):;}=<?(()):;=();(!()){// eg. if the number we're trying to convert is -1
=();}(([])&){=().;}<?~:;}/**
     * Converts a BigInteger to a hex string (eg. base-16).
     *
     * @param bool $twos_compliment
     * @return string
     */(=){(());}/**
     * Converts a BigInteger to a bit string (eg. base-2).
     *
     * Negative numbers are saved as positive numbers, unless $twos_compliment is set to true, at which point, they're
     * saved as two's compliment.
     *
     * @param bool $twos_compliment
     * @return string
     */(=){=();=();=>?(,-):(,);((())>){.;};}/**
     * Calculates modular inverses.
     *
     * Say you have (30 mod 17 * x mod 17) mod 17 == 1.  x can be found using modular inverses.
     *
     * {@internal See {@link http://www.cacr.math.uwaterloo.ca/hac/about/chap14.pdf#page=21 HAC 14.64} for more information.}
     *
     * @param \phpseclib3\Math\BigInteger\Engines\Engine $n
     * @return \phpseclib3\Math\BigInteger\Engines\Engine|false
     */(){// $x mod -$n == $x mod $n.
=();(()<){=();=();(());}(());/**
         * @var BigInteger $gcd
         * @var BigInteger $x
         */(!()){;}=()<?():;()<?(()):();}/**
     * Serialize
     *
     * Will be called, automatically, when serialize() is called on a BigInteger object.
     *
     * @return string
     */(){=[()];(>){[]=;}();}/**
     * Serialize
     *
     * Will be called, automatically, when unserialize() is called on a BigInteger object.
     *
     * @param string $serialized
     */(){=();=([],-);=;=;(([])){// recalculate $this->bitmask
([]);}}/**
     * Converts a BigInteger to a base-10 number.
     *
     * @return string
     */(){();}/**
     *  __debugInfo() magic method
     *
     * Will be called, automatically, when print_r() or var_dump() are called
     */(){[.(),()];}/**
     * Set Precision
     *
     * Some bitwise operations give different results depending on the precision being used.  Examples include left
     * shift, not, and rotates.
     *
     * @param int $bits
     */(){(<){=-;=;;}=;=();=();=;}/**
     * Get Precision
     *
     * Returns the precision if it exists, -1 if it doesn't
     *
     * @return int
     */(){;}/**
     * Set Bitmask
     * @return Engine
     * @param int $bits
     * @see self::setPrecision()
     */(){((((&))-).((),),);}/**
     * Logical Not
     *
     * @return Engine|string
     */(){// calculuate "not" without regard to $this->precision
// (will always result in a smaller number.  ie. ~1 isn't 1111 1110 - it's 0)
=();(){();}=(([]));=~;=(([]));(()){=(,(,));}[]=(());// see if we need to add extra leading 1's
=()+*()-;=-;(){((,));}// generate as many leading 1's as we need to.
=(((&))-).((),);(,);=(,(),(),);((|,));}/**
     * Logical Left Shift
     *
     * Shifts binary strings $shift bits, essentially multiplying by 2**$shift.
     *
     * @param string $x
     * @param int $shift
     * @return string
     */(&,){(){;}=;// eg. floor($shift/8)
;// eg. $shift % 8
=;(=()-;;){=([])|;[]=();=;}=()?():;=..((),);}/**
     * Logical Left Rotate
     *
     * Instead of the top x bits being dropped they're appended to the shifted bit string.
     *
     * @param int $shift
     * @return \phpseclib3\Math\BigInteger\Engines\Engine
     */(){=();(>){=;(){=();}{=(());=();}}{=([]);(=;;){}=*()-+;=(((&))-).((),);}(<){;};(!){;}=();=((,));=(-);=?():();();}/**
     * Logical Right Rotate
     *
     * Instead of the bottom x bits being dropped they're prepended to the shifted bit string.
     *
     * @param int $shift
     * @return \phpseclib3\Math\BigInteger\Engines\Engine
     */(){(-);}/**
     * Returns the smallest and largest n-bit number
     *
     * @param int $bits
     * @return \phpseclib3\Math\BigInteger\Engines\Engine[]
     */(){=;=((),);=((),);=&;(){=((-)).;=(()-).;}{[]=();}[(,),(,)];}/**
     * Return the size of a BigInteger in bits
     *
     * @return int
     */(){(());}/**
     * Return the size of a BigInteger in bytes
     *
     * @return int
     */(){(());}/**
     * Performs some pre-processing for powMod
     *
     * @param Engine $e
     * @param Engine $n
     * @return bool|Engine
     */(,){=()<?:();((())<){=();=();(){;}((,));}(,);}/**
     * Sliding Window k-ary Modular Exponentiation
     *
     * Based on {@link http://www.cacr.math.uwaterloo.ca/hac/about/chap14.pdf#page=27 HAC 14.85} /
     * {@link http://math.libtomcrypt.com/files/tommath.pdf#page=210 MPM 7.7}.  In a departure from those algorithims,
     * however, this function performs a modular reduction after every multiplication and squaring operation.
     * As such, this function has the same preconditions that the reductions being used do.
     *
     * @param \phpseclib3\Math\BigInteger\Engines\Engine $x
     * @param \phpseclib3\Math\BigInteger\Engines\Engine $e
     * @param \phpseclib3\Math\BigInteger\Engines\Engine $n
     * @param string $class
     * @return \phpseclib3\Math\BigInteger\Engines\Engine
     */(,,,){=[,,,,,];// from BigInteger.java's oddModPow function
//static $window_ranges = [0, 7, 36, 140, 450, 1303, 3529]; // from MPM 7.3.1
=();=();// calculate the appropriate window size.
// $window_size == 3 if $window_ranges is between 25 and 81, for example.
(=,=;<()>[];,){}=;((,)){(,);}// precompute $this^0 through $this^$window_size
=[];[]=(,,);[]=([],,);// we do every other number since substr($e_bits, $i, $j+1) (see below) is supposed to end
// in a 1.  ie. it's supposed to be odd.
=(-);(=;<;){=;[+]=([-],[],,);}=();=(,,);(=;<;){(![]){=(,,);;}{(=-;>;){(!([+])){;}}// eg. the length of substr($e_bits, $i, $j + 1)
(=;;){=(,,);}=(,[((,,+))],,);+;}}=();=(,,);;}/**
     * Generates a random number of a certain size
     *
     * Bit length is equal to $size
     *
     * @param int $size
     * @return \phpseclib3\Math\BigInteger\Engines\Engine
     */(){(());/**
         * @var BigInteger $min
         * @var BigInteger $max
         */(,);}/**
     * Generates a random prime number of a certain size
     *
     * Bit length is equal to $size
     *
     * @param int $size
     * @return \phpseclib3\Math\BigInteger\Engines\Engine
     */(){(());/**
         * @var BigInteger $min
         * @var BigInteger $max
         */(,);}/**
     * Performs some pre-processing for randomRangePrime
     *
     * @param Engine $min
     * @param Engine $max
     * @return bool|Engine
     */(,){=();(!){()?:;}(<){// if $min is bigger then $max, swap $min and $max
=;=;=;}=(,);(,,);}/**
     * Generate a random number between a range
     *
     * Returns a random number between $min and $max where $min and $max
     * can be defined using one of the two methods:
     *
     * BigInteger::randomRange($min, $max)
     * BigInteger::randomRange($max, $min)
     *
     * @param Engine $min
     * @param Engine $max
     * @return Engine
     */(,){=();(!){;}(<){// if $min is bigger then $max, swap $min and $max
=;=;=;}(!()){=();}=(());=(((),()));/*
            doing $random % $max doesn't work because some numbers will be more likely to occur than others.
            eg. if $max is 140 and $random's max is 255 then that'd mean both $random = 5 and $random = 145
            would produce 5 whereas the only value of random that could produce 139 would be 139. ie.
            not all numbers would be equally likely. some would be more likely than others.

            creating a whole new random number until you find one that is within the range doesn't work
            because, for sufficiently small ranges, the likelihood that you'd get a number within that range
            would be pretty small. eg. with $random's max being 255 and if your $max being 1 the probability
            would be pretty high that $random would be greater than $max.

            phpseclib works around this using the technique described here:

            http://crypto.stackexchange.com/questions/5708/creating-a-small-number-from-a-cryptographically-secure-random-string
        */=(().(,),);=((),);()=();=();(()){=();=();=();=(((),));=();()=();=();}(,)=();();}/**
     * Performs some post-processing for randomRangePrime
     *
     * @param Engine $x
     * @param Engine $min
     * @param Engine $max
     * @return bool|Engine
     */(,,){(!()){=();}();(()>){// if $x > $max then $max is even and if $min == $max then no prime number exists between the specified range
(()){;}=;();}=;(){(()){;}=();(()>){=;(()){;}();}(()){;}}}/**
     * Sets the $t parameter for primality testing
     *
     * @return int
     */(){=();// see HAC 4.49 "Note (controlling the error probability)"
// @codingStandardsIgnoreStart
(){=;}// floor(1300 / 8)
(){=;}// floor( 850 / 8)
(){=;}// floor( 650 / 8)
(){=;}// floor( 550 / 8)
(){=;}// floor( 450 / 8)
(){=;}// floor( 400 / 8)
(){=;}// floor( 350 / 8)
(){=;}// floor( 300 / 8)
(){=;}// floor( 250 / 8)
(){=;}// floor( 200 / 8)
(){=;}// floor( 150 / 8)
{=;}// @codingStandardsIgnoreEnd
;}/**
     * Tests Primality
     *
     * Uses the {@link http://en.wikipedia.org/wiki/Miller%E2%80%93Rabin_primality_test Miller-Rabin primality test}.
     * See {@link http://www.cacr.math.uwaterloo.ca/hac/about/chap4.pdf#page=8 HAC 4.24} for more info.
     *
     * @param int $t
     * @return bool
     */(){(!()){;}=;=();=();=;=();(=;<;){=(,);=(,);(!()!()){(=;<!();){=(,);(()){;}}(!()){;}}};}/**
     * Checks a numer to see if it's prime
     *
     * Assuming the $t parameter is not set, this function has an error rate of 2**-80.  The main motivation for the
     * $t parameter is distributability.  BigInteger::randomPrime() can be distributed across multiple pageloads
     * on a website instead of just one.
     *
     * @param int|bool $t
     * @return bool
     */(=){(!){=();}();}/**
     * Performs a few preliminary checks on root
     *
     * @param int $n
     * @return \phpseclib3\Math\BigInteger\Engines\Engine
     */(){(<){;}// we want positive exponents
(()<){;}// we want positive numbers
(()<){;}// n-th root of 1 or 2 is 1
();}/**
     * Calculates the nth root of a biginteger.
     *
     * Returns the nth root of a positive biginteger, where n defaults to 2
     *
     * {@internal This function is based off of {@link http://mathforum.org/library/drmath/view/52605.html this page} and {@link http://stackoverflow.com/questions/11242920/calculating-nth-root-with-bcmath-in-php this stackoverflow question}.}
     *
     * @param int $n
     * @return \phpseclib3\Math\BigInteger\Engines\Engine
     */(){=();// g is our guess number
=;// while (g^n < num) g=g*2
(()()<){=();}// if (g^n==num) num is a power of 2, we're lucky, end of job
// == 0 bccomp(bcpow($g, $n), $n->value)==0
(()()>){=;();}// if we're here num wasn't a power of 2 :(
=;// og means original guess and here is our upper bound
=()[];// g is set to be our lower bound
=()()[];// step is the half of upper bound - lower bound
=();// we start at lower bound + step , basically in the middle of our interval
// while step>1
(()){=();=()[];=();// compare our guess with real number
(){-:// if guess is lower we add the new step
=();;:// if guess is higher we sub the new step
=();;:// if guess is exactly the num we're done, we return the value
=;;}}(){=();}// whatever happened, g is the closest guess we can make so return it
=;();}/**
     * Calculates the nth root of a biginteger.
     *
     * @param int $n
     * @return Engine
     */(=){();}/**
     * Return the minimum BigInteger between an arbitrary number of BigIntegers.
     *
     * @param array $nums
     * @return Engine
     */(){(()){[];}=[];(=;<();){=([])>?[]:;};}/**
     * Return the minimum BigInteger between an arbitrary number of BigIntegers.
     *
     * @param array $nums
     * @return Engine
     */(){(()){[];}=[];(=;<();){=([])<?[]:;};}/**
     * Create Recurring Modulo Function
     *
     * Sometimes it may be desirable to do repeated modulos with the same number outside of
     * modular exponentiation
     *
     * @return callable
     */(){=;=!(,)?..:;((,)){=(,);=(..);;}=;=(..);;}/**
     * Calculates the greatest common divisor and Bezout's identity.
     *
     * @param Engine $n
     * @param Engine $stop (optional)
     * @return Engine
     */(,=){=;=;=();=();=;=;=;=;(!()){()=();=;=;=(());=;=;=(());=;=;=(());}[,,];}/**
     * Bitwise Split
     *
     * Splits BigInteger's into chunks of $split bits
     *
     * @param int $split
     * @return \phpseclib3\Math\BigInteger\Engines\Engine[]
     */(){(<){();}=()();=;=[];(!()){[]=();=();}();}/**
     * Logical And
     *
     * @param Engine $x
     * @return Engine
     */(){=();=();=((),());=(,,(),);=(,,(),);((&,-));}/**
     * Logical Or
     *
     * @param Engine $x
     * @return Engine
     */(){=();=();=((),());=(,,(),);=(,,(),);((|,-));}/**
     * Logical Exclusive Or
     *
     * @param Engine $x
     * @return Engine
     */(){=();=();=((),());=(,,(),);=(,,(),);((^,-));}}