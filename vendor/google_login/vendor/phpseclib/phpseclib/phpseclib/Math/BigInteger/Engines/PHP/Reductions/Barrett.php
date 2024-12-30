/**
 * PHP Barrett Modular Exponentiation Engine
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
 * PHP Barrett Modular Exponentiation Engine
 *
 * @package PHP
 * @author  Jim Wigginton <terrafrost@php.net>
 * @access  public
 */{/**
     * Barrett Modular Reduction
     *
     * See {@link http://www.cacr.math.uwaterloo.ca/hac/about/chap14.pdf#page=14 HAC 14.3.3} /
     * {@link http://math.libtomcrypt.com/files/tommath.pdf#page=165 MPM 6.2.5} for more information.  Modified slightly,
     * so as not to require negative numbers (initially, this script didn't support negative numbers).
     *
     * Employs "folding", as described at
     * {@link http://www.cosic.esat.kuleuven.be/publications/thesis-149.pdf#page=66 thesis-149.pdf#page=66}.  To quote from
     * it, "the idea [behind folding] is to find a value x' such that x (mod m) = x' (mod m), with x' being smaller than x."
     *
     * Unfortunately, the "Barrett Reduction with Folding" algorithm described in thesis-149.pdf is not, as written, all that
     * usable on account of (1) its not using reasonable radix points as discussed in
     * {@link http://math.libtomcrypt.com/files/tommath.pdf#page=162 MPM 6.2.2} and (2) the fact that, even with reasonable
     * radix points, it only works when there are an even number of digits in the denominator.  The reason for (2) is that
     * (x >> 1) + (x >> 1) != x / 2 + x / 2.  If x is even, they're the same, but if x is odd, they're not.  See the in-line
     * comments for details.
     *
     * @param array $n
     * @param array $m
     * @param string $class
     * @return array
     */(,,){=[[],[]];=();// if (self::compareHelper($n, $static::square($m)) >= 0) {
(()>*){=();=();=;=;(,)=();;}// if (m.length >> 1) + 2 <= m.length then m is too small and n can't be reduced
(<){(,,);}// n = 2 * m.length
((=(,[]))){=([]);[][]=;=();=&;=(,+());[]=;=();=;(,)=();=;=;[][]=[,// m.length >> 1 (technically (m.length >> 1) + 1)
// m.length
];}{([][]);}=+();=(,,);// m.length + (m.length >> 1)
=(,);// m.length >> 1
=();=(,,,);// m.length + (m.length >> 1)
=(,,[],);// m.length + (m.length >> 1) + 1 (so basically we're adding two same length numbers)
//if ($m_length & 1) {
//    return self::regularBarrett($n[self::VALUE], $m, $class);
//}
// (m.length + (m.length >> 1) + 1) - (m.length - 1) == (m.length >> 1) + 2
=([],-);// if even: ((m.length >> 1) + 2) + (m.length >> 1) == m.length + 2
// if odd:  ((m.length >> 1) + 2) + (m.length >> 1) == (m.length - 1) + 2 == m.length + 1
=(,,,);// if even: (m.length + 2) - ((m.length >> 1) + 1) = m.length - (m.length >> 1) + 1
// if odd:  (m.length + 1) - ((m.length >> 1) + 1) = m.length - (m.length >> 1)
=([],()+);// if even: (m.length - (m.length >> 1) + 1) + m.length = 2 * m.length - (m.length >> 1) + 1
// if odd:  (m.length - (m.length >> 1)) + m.length     = 2 * m.length - (m.length >> 1)
=(,,,);// at this point, if m had an odd number of digits, we'd be subtracting a 2 * m.length - (m.length >> 1) digit
// number from a m.length + (m.length >> 1) + 1 digit number.  ie. there'd be an extra digit and the while loop
// following this comment would loop a lot (hence our calling _regularBarrett() in that situation).
=([],,[],);(([],[],,)){=([],[],,);}[];}/**
     * (Regular) Barrett Modular Reduction
     *
     * For numbers with more than four digits BigInteger::_barrett() is faster.  The difference between that and this
     * is that this function does not fold the denominator into a smaller form.
     *
     * @param array $x
     * @param array $n
     * @param string $class
     * @return array
     */(,,){=[[],[]];=();(()>*){=();=();=;=;(,)=();;}((=(,[]))){=([]);[][]=;=();=&;=(,*);[]=;=();=;(,)=();// m.length
[][]=;}// 2 * m.length - (m.length - 1) = m.length + 1
=(,-);// (m.length + 1) + m.length = 2 * m.length + 1
=(,,[][],);// (2 * m.length + 1) - (m.length - 1) = m.length + 2
=([],+);// m.length + 1
=(,,+);// m.length + 1
=(,,,,+,);// $temp == array_slice($class::regularMultiply($temp, false, $n, false)->value, 0, $n_length + 1)
((,,[],[])<){=(,+);[()]=;=(,,,);=[];}// at this point, we're subtracting a number with m.length + 1 digits from another number with m.length + 1 digits
=(,,[],[]);(([],[],,)>){=([],[],,);}[];}/**
     * Performs long multiplication up to $stop digits
     *
     * If you're going to be doing array_slice($product->value, 0, $stop), some cycles can be saved.
     *
     * @see self::regularBarrett()
     * @param array $x_value
     * @param bool $x_negative
     * @param array $y_value
     * @param bool $y_negative
     * @param int $stop
     * @param string $class
     * @return array
     */(,,,,,){=();=();(!!){// a 0 is being multiplied
[[],];}(<){=;=;=;=();=();}=(,+);// the following for loop could be removed if the for loop following it
// (the one with nested for loops) initially set $i to 0, but
// doing so would also make the result in one set of unnecessary adds,
// since on the outermost loops first pass, $product->value[$k] is going
// to always be 0
=;(=;<;){// ie. $i = 0, $k = $i
=[]*[]+;// $product_value[$k] == 0
=?(/):();[]=(-*);}(<){[]=;}// the above for loop is what the previous comment was talking about.  the
// following for loop is the "one with nested for loops"
(=;<;){=;(=,=;<<;,){=[]+[]*[]+;=?(/):();[]=(-*);}(<){[]=;}}[(),];}}