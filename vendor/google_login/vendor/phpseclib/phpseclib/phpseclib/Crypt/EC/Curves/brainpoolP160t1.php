/**
 * brainpoolP160t1
 *
 * This curve is a twisted version of brainpoolP160r1 with A = -3. With brainpool,
 * the curves ending in r1 are the "regular" curves and the curves ending in "t1"
 * are the twisted version of the r1 curves. Per https://tools.ietf.org/html/rfc5639#page-7
 * you can convert a point on an r1 curve to a point on a t1 curve thusly:
 *
 *     F(x,y) := (x*Z^2, y*Z^3)
 *
 * The advantage of A = -3 is that some of the point doubling and point addition can be
 * slightly optimized. See http://hyperelliptic.org/EFD/g1p/auto-shortw-projective-3.html
 * vs http://hyperelliptic.org/EFD/g1p/auto-shortw-projective.html for example.
 *
 * phpseclib does not currently take advantage of this optimization opportunity
 *
 * PHP version 5 and 7
 *
 * @category  Crypt
 * @package   EC
 * @author    Jim Wigginton <terrafrost@php.net>
 * @copyright 2017 Jim Wigginton
 * @license   http://www.opensource.org/licenses/mit-license.html  MIT License
 * @link      http://pear.php.net/package/Math_BigInteger
 */;;;{(){((,));((,),// eg. -3
(,));((,),(,));((,));}}