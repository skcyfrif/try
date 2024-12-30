/**
 * Pure-PHP BigInteger Engine
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
 * Pure-PHP Engine.
 *
 * @package PHP
 * @author  Jim Wigginton <terrafrost@php.net>
 * @access  public
 */{/**#@+
     * Array constants
     *
     * Rather than create a thousands and thousands of new BigInteger objects in repeated function calls to add() and
     * multiply() or whatever, we'll just work directly on arrays, taking them in as parameters and returning them.
     *
     * @access protected
    *//**
     * $result[self::VALUE] contains the value.
     */=;/**
     * $result[self::SIGN] contains the sign.
     */=;/**#@-*//**
     * Karatsuba Cutoff
     *
     * At what point do we switch between Karatsuba multiplication and schoolbook long multiplication?
     *
     * @access private
     */=;/**
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
     * Default constructor
     *
     * @param mixed $x integer Base-10 number or base-$base number if $base set.
     * @param int $base
     * @see parent::__construct()
     * @return \phpseclib3\Math\BigInteger\Engines\PHP
     */(=,=){(!()){=();}(!){(.);}=[];(,);}/**
     * Initialize a PHP BigInteger Engine instance
     *
     * @param int $base
     * @see parent::__construct()
     */(){(()){:=(()&)?.:;=((),);=;;:=();=();=[];=;([]){=;=(,);}=(,()+((-)*())%,,);(()){=();=((((,,)),));=(,);}=;}}/**
     * Pads strings so that unpack may be used on them
     *
     * @param string $str
     * @return string
     */(){=();=-(()%);(,+,,);}/**
     * Converts a BigInteger to a base-10 number.
     *
     * @return string
     */(){(!()){;}=;=;=;=();=[];=;(()){(,)=();=(([])?[]:,,,).;}=(,);(()){=;}(){=.;};}/**
     * Converts a BigInteger to a byte string (eg. base-256).
     *
     * @param bool $twos_compliment
     * @return string
     */(=){(){();}(!()){>?((),(+)):;}=();=(,(,));>?((,-((+))),(+),(),):;}/**
     * Performs addition.
     *
     * @param array $x_value
     * @param bool $x_negative
     * @param array $y_value
     * @param bool $y_negative
     * @return array
     */(,,,){=();=();(){[,];}(){[,];}// subtract, if appropriate
(){(){[[],];}=(,,,);[]=(,,,)>?:;;}(<){=;=;}{=;=;}[()]=;// just in case the carry adds an extra digit
=;(=,=;<;,){//$sum = $x_value[$j] * static::BASE_FULL + $x_value[$i] + $y_value[$j] * static::BASE_FULL + $y_value[$i] + $carry;
=([]+[])*+[]+[]+;=;// eg. floor($sum / 2**52); only possible values (in any base) are 0 and 1
=?-:;=?(/):();[]=(-*);// eg. a faster alternative to fmod($sum, 0x4000000)
[]=;}(){// ie. if $y_size is odd
=[]+[]+;=;[]=?-:;;// ie. let $i = $j since we've just done $value[$i]
}(){(;[];){[]=;}[];}[(),];}/**
     * Performs subtraction.
     *
     * @param array $x_value
     * @param bool $x_negative
     * @param array $y_value
     * @param bool $y_negative
     * @return array
     */(,,,){=();=();(){[,!];}(){[,];}// add, if appropriate (ie. -$x - +$y or +$x - -$y)
(){=(,,,);[]=;;}=(,,,);(!){[[],];}// switch $x and $y around, if appropriate.
((!<)(>)){=;=;=;=!;=();=();}// at this point, $x_value should be at least as big as - if not bigger than - $y_value
=;(=,=;<;,){=([]-[])*+[]-[]-;=<;// eg. floor($sum / 2**52); only possible values (in any base) are 0 and 1
=?+:;=?(/):();[]=(-*);[]=;}(){// ie. if $y_size is odd
=[]-[]-;=<;[]=?+:;;}(){(;![];){[]=;}[];}[(),];}/**
     * Performs multiplication.
     *
     * @param array $x_value
     * @param bool $x_negative
     * @param array $y_value
     * @param bool $y_negative
     * @return array
     */(,,,){//if ( $x_value == $y_value ) {
//    return [
//        self::VALUE => self::square($x_value),
//        self::SIGN => $x_sign != $y_value
//    ];
//}
=();=();(!!){// a 0 is being multiplied
[[],];}[(,)<*?((,)):((,)),];}/**
     * Performs Karatsuba multiplication on two BigIntegers
     *
     * See {@link http://en.wikipedia.org/wiki/Karatsuba_algorithm Karatsuba algorithm} and
     * {@link http://math.libtomcrypt.com/files/tommath.pdf#page=120 MPM 5.2.3}.
     *
     * @param array $x_value
     * @param array $y_value
     * @return array
     */(,){=((),());(<){(,);}=(,);=(,,);=(,);=(,,);=(,);=(,);=(,,,);=(,,,);=([],[]);=(,,,);=(,,[],);=((,*,),);[]=((,,),[]);=(,,[],[]);=([],[],,);[];}/**
     * Performs long multiplication on two BigIntegers
     *
     * Modeled after 'multiply' in MutableBigInteger.java.
     *
     * @param array $x_value
     * @param array $y_value
     * @return array
     */(,){=();=();(!!){// a 0 is being multiplied
[];}=(,+);// the following for loop could be removed if the for loop following it
// (the one with nested for loops) initially set $i to 0, but
// doing so would also make the result in one set of unnecessary adds,
// since on the outermost loops first pass, $product->value[$k] is going
// to always be 0
=;(=;<;){// ie. $i = 0
=[]*[]+;// $product_value[$k] == 0
=?(/):();[]=(-*);}[]=;// the above for loop is what the previous comment was talking about.  the
// following for loop is the "one with nested for loops"
(=;<;){=;(=,=;<;,){=[]+[]*[]+;=?(/):();[]=(-*);}[]=;};}/**
     * Divides two BigIntegers.
     *
     * Returns an array whose first element contains the quotient and whose second element contains the
     * "common residue".  If the remainder would be positive, the "common residue" and the remainder are the
     * same.  If the remainder would be negative, the "common residue" is equal to the sum of the remainder
     * and the divisor (basically, the "common residue" is the first positive modulo).
     *
     * @param \phpseclib3\Math\BigInteger\engines\PHP $y
     * @return array
     * @internal This function is based off of {@link http://www.cacr.math.uwaterloo.ca/hac/about/chap14.pdf#page=9 HAC 14.20}.
     */(){(()){(,)=(,[]);=();=();=;=[];=;[(),()];}=;=;=;=;==;=();(!){=();=[];=;[(),()];}(<){// if $x is negative, "add" $y.
(){=();}[(),()];}// normalize $x and $y as described in HAC 14.23 / 14.24
=[()-];(=;!(&);){;}();();=&;=()-;=()-;=();=&;=(,-+);,,;(!()){=();=();=();}=&;=&;// $temp = $y << ($x_max - $y_max-1) in base 2**26
=((,-),);(()){// calculate the "common residue"
[-];=();=()-;}(=;+;){=&;=[([])?[]:,([-])?[-]:,([-])?[-]:];=[[],(>)?[-]:];=--;([][]){[]=;}{[]=([]*+[],[]);}=[[],[]];=[[]];=();=[[],[],[]];(()>){[];=[[]];=();}=(,);=[[]];=();=&;(()){=(,);}=();(()<){=(,);=();[];}=()-;}// unnormalize the remainder
();=;// calculate the "common residue", if appropriate
(){();=();}[(),()];}/**
     * Divides a BigInteger by a regular integer
     *
     * abc / x = a00 / x + b0 / x + c / x
     *
     * @param array $dividend
     * @param int $divisor
     * @return array
     */(,){=;=[];(=()-;;){=*+[];[]=(,);=(-*[]);}[,];}/**
     * Single digit division
     *
     * Even if int64 is being used the division operator will return a float64 value
     * if the dividend is not evenly divisible by the divisor. Since a float64 doesn't
     * have the precision of int64 this is a problem so, when int64 is being used,
     * we'll guarantee that the dividend is divisible by first subtracting the remainder.
     *
     * @param int $x
     * @param int $y
     * @return int
     */(,){(){(/);}// static::BASE === 31
(-(%))/;}/*
     * Convert an array / boolean to a PHP BigInteger object
     *
     * @param array $arr
     * @return \phpseclib3\Math\BigInteger\Engines\PHP
     */(){=();=[];=[];();}/**
     * Normalize
     *
     * Removes leading zeros and truncates (if necessary) to maintain the appropriate precision
     *
     * @param PHP $result
     * @return PHP
     */(){();=;=;=&;(!()){=;;}=();(!()){=((),());=(,,);(=;<;){[]=[]&[];}};}/*
     * Compares two numbers.
     *
     * @param array $x_value
     * @param bool $x_negative
     * @param array $y_value
     * @param bool $y_negative
     * @return int
     * @see static::compare()
     */(,,,){(){(!)?:-;}=?-:;(()()){(()>())?:-;}=((),());=(,,);=(,,);(=()-;;){([][]){([]>[])?:-;}};}/**
     * Absolute value.
     *
     * @return \phpseclib3\Math\BigInteger\Engines\PHP
     */(){=();=;;}/**
     * Trim
     *
     * Removes leading zeros
     *
     * @param array $value
     * @return PHP
     */(){(=()-;;){([]){;}([]);};}/**
     * Logical Right Shift
     *
     * Shifts BigInteger's by $shift bits, effectively dividing by 2**$shift.
     *
     * @param int $shift
     * @return \phpseclib3\Math\BigInteger\Engines\PHP
     */(){=();// could just replace lshift with this, but then all lshift() calls would need to be rewritten
// and I don't want to do that...
=;();();}/**
     * Logical Left Shift
     *
     * Shifts BigInteger's by $shift bits, effectively multiplying by 2**$shift.
     *
     * @param int $shift
     * @return \phpseclib3\Math\BigInteger\Engines\PHP
     */(){=();// could just replace _rshift with this, but then all _lshift() calls would need to be rewritten
// and I don't want to do that...
=;();();}/**
     * Converts 32-bit integers to bytes.
     *
     * @param int $x
     * @return string
     */(){((,),());}/**
     * Array Repeat
     *
     * @param int $input
     * @param int $multiplier
     * @return array
     */(,){?(,,):[];}/**
     * Logical Left Shift
     *
     * Shifts BigInteger's by $shift bits.
     *
     * @param int $shift
     */(){(){;}=(/);;=;=;(=;<();){=[]*+;=?(/):();[]=(-*);}(){[()]=;}(){(,);}}/**
     * Logical Right Shift
     *
     * Shifts BigInteger's by $shift bits.
     *
     * @param int $shift
     */(){(){;}=(/);;=-;=()-;(){=(,);}=;(=()-;;){=[]|;=([]&);[]=;}=();}/**
     * Performs modular exponentiation.
     *
     * @param PHP $e
     * @param PHP $n
     * @return PHP
     */(,){{=;(,,,);}(){(,,,);}}/**
     * Performs squaring
     *
     * @param array $x
     * @return array
     */(){()<*?(()):(());}/**
     * Performs traditional squaring on two BigIntegers
     *
     * Squaring can be done faster than multiplying a number by itself can be.  See
     * {@link http://www.cacr.math.uwaterloo.ca/hac/about/chap14.pdf#page=7 HAC 14.2.4} /
     * {@link http://math.libtomcrypt.com/files/tommath.pdf#page=141 MPM 5.3} for more information.
     *
     * @param array $value
     * @return array
     */(){(()){[];}=(,*());(=,=()-;;){=;=[]+[]*[];=?(/):();[]=(-*);// note how we start from $i+1 instead of 0 as we do in multiplication.
(=+,=+;;,){=[]+*[]*[]+;=?(/):();[]=(-*);}// the following line can yield values larger 2**15.  at this point, PHP should switch
// over to floats.
[++]=;};}/**
     * Performs Karatsuba "squaring" on two BigIntegers
     *
     * See {@link http://en.wikipedia.org/wiki/Karatsuba_algorithm Karatsuba algorithm} and
     * {@link http://math.libtomcrypt.com/files/tommath.pdf#page=151 MPM 5.3.4}.
     *
     * @param array $value
     * @return array
     */(){=();(<){();}=(,);=(,,);=();=();=(,,,);=([]);=(,,,);=(,,[],);=((,*,),);[]=((,,),[]);=(,,[],[]);=([],[],,);[];}/**
     * Make the current number odd
     *
     * If the current number is odd it'll be unchanged.  If it's even, one will be added to it.
     *
     * @see self::randomPrime()
     */(){[];}/**
     * Test the number against small primes.
     *
     * @see self::isPrime()
     */(){([]){;}([]){;}(~[]&){;}=;(){(,)=(,);(!){()[];}};}/**
     * Scan for 1 and right shift by that amount
     *
     * ie. $s = gmp_scan1($n, 0) and $r = gmp_div_q($n, gmp_pow(gmp_init('2'), $s));
     *
     * @see self::isPrime()
     * @param PHP $r
     * @return int
     */(){=&;(=,=();<;){=~[]&;(=;()&;){}(){;}}=*+;();;}/**
     * Performs exponentiation.
     *
     * @param PHP $n
     * @return PHP
     */(){(()){();}// n^0 = 1
=;(!()){=();=();};}/**
     * Is Odd?
     *
     * @return boolean
     */(){([]&);}/**
     * Tests if a bit is set
     *
     * @return boolean
     */(){=(/);=%;(!([])){;}([]&());}/**
     * Is Negative?
     *
     * @return boolean
     */(){;}/**
     * Negate
     *
     * Given $k, returns -$k
     *
     * @return BigInteger
     */(){=;=!;;}/**
     * Bitwise Split
     *
     * Splits BigInteger's into chunks of $split bits
     *
     * @param int $split
     * @return \phpseclib3\Math\BigInteger\Engines\PHP[]
     */(){(<){();}=(/);(!){=();((){=();=?[]:[];;},);}=[];=;==;=();(<){=[];(!){=(,,);;=%;(){=()-;=([])?[]:;[]=&;}}{=-;=-;=(/+);=(,,);;=%;(){=()-;=([])?[]:;[]=&;}=;(=()-;;){=[]&;[]=([])|();=;}=;=;}=();=();[]=;}();}/**
     * Bitwise Split where $split < static::BASE
     *
     * @param int $split
     * @return \phpseclib3\Math\BigInteger\Engines\PHP[]
     */(){=[];=;=()-;==;=();[]=;=;(){=[]&;[];(!){;=?:-;(!){;=;=;}}(){=()-;([]&);[];=-;=?:-;}[]=;}([()-]){([()-]);}();}}