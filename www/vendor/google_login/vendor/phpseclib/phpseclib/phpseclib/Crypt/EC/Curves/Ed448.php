/**
 * Ed448
 *
 * PHP version 5 and 7
 *
 * @category  Crypt
 * @package   EC
 * @author    Jim Wigginton <terrafrost@php.net>
 * @copyright 2017 Jim Wigginton
 * @license   http://www.opensource.org/licenses/mit-license.html  MIT License
 */;;;;;{=;=;(){// 2^448 - 2^224 - 1
((.,));((),// -39081
(.,));((.,),(.,));((.,));}/**
     * Recover X from Y
     *
     * Implements steps 2-4 at https://tools.ietf.org/html/rfc8032#section-5.2.3
     *
     * Used by EC\Keys\Common.php
     *
     * @param BigInteger $y
     * @param boolean $sign
     * @return object[]
     */(,){=();=();=();=()();=();(()){(){();};}// find the square root
=()(());=();=();(!()()()){();}(()){=();}[,];}/**
     * Extract Secret Scalar
     *
     * Implements steps 1-3 at https://tools.ietf.org/html/rfc8032#section-5.2.5
     *
     * Used by the various key handlers
     *
     * @param string $str
     * @return \phpseclib3\Math\PrimeField\Integer
     */(){(()){();}// 1.  Hash the 57-byte private key using SHAKE256(x, 114), storing the
//     digest in a 114-octet large buffer, denoted h.  Only the lower 57
//     bytes are used for generating the public key.
=();=();=(,,);// 2.  Prune the buffer: The two least significant bits of the first
//     octet are cleared, all eight bits the last octet are cleared, and
//     the highest bit of the second to last octet is set.
[]=[]&();=();[]=;[]=[]|();// 3.  Interpret the buffer as the little-endian integer, forming a
//     secret scalar s.
=(,);=();=;;}/**
     * Encode a point as a string
     *
     * @param array $point
     * @return string
     */(){(,)=;=.();(()){[]=[]|();}=();;}/**
     * Creates a random scalar multiplier
     *
     * @return \phpseclib3\Math\PrimeField\Integer
     */(){(());}/**
     * Converts an affine point to an extended homogeneous coordinate
     *
     * From https://tools.ietf.org/html/rfc8032#section-5.2.4 :
     *
     * A point (x,y) is represented in extended homogeneous coordinates (X, Y, Z, T),
     * with x = X/Z, y = Y/Z, x * y = T/Z.
     *
     * @return \phpseclib3\Math\PrimeField\Integer[]
     */(){(()){[,,];}(([])){;}[]=;;}/**
     * Doubles a point on a curve
     *
     * @return FiniteField[]
     */(){(!()){();}(!()){[];}(!([])){();}// from https://tools.ietf.org/html/rfc8032#page-18
(,,)=;=();=();=();=();=();=();=(());=()();=()();=();[,,];}/**
     * Adds two points on the curve
     *
     * @return FiniteField[]
     */(,){(!()){();}(!()!()){(()){;}(()){;}[];}(!([])!([])){();}([]([])){![]([])?[]:();}// from https://tools.ietf.org/html/rfc8032#page-17
(,,)=;(,,)=;=();=();=();=();=()();=();=();=()(());=()(()());=()(());=();[,,];}}