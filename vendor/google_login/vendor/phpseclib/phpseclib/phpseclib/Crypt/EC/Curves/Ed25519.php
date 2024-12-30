/**
 * Ed25519
 *
 * PHP version 5 and 7
 *
 * @category  Crypt
 * @package   EC
 * @author    Jim Wigginton <terrafrost@php.net>
 * @copyright 2017 Jim Wigginton
 * @license   http://www.opensource.org/licenses/mit-license.html  MIT License
 */;;;;;{=;/*
      Per https://tools.ietf.org/html/rfc8032#page-6 EdDSA has several parameters, one of which is b:

      2.   An integer b with 2^(b-1) > p.  EdDSA public keys have exactly b
           bits, and EdDSA signatures have exactly 2*b bits.  b is
           recommended to be a multiple of 8, so public key and signature
           lengths are an integral number of octets.

      SIZE corresponds to b
    */=;(){// 2^255 - 19
((,));(// -1
(,),// a
// -121665/121666
(,)// d
);((,),(,));((,));// algorithm 14.47 from http://cacr.uwaterloo.ca/hac/about/chap14.pdf#page=16
/*
        $this->setReduction(function($x) {
            $parts = $x->bitwise_split(255);
            $className = $this->className;

            if (count($parts) > 2) {
                list(, $r) = $x->divide($className::$modulo);
                return $r;
            }

            $zero = new BigInteger();
            $c = new BigInteger(19);

            switch (count($parts)) {
                case 2:
                    list($qi, $ri) = $parts;
                    break;
                case 1:
                    $qi = $zero;
                    list($ri) = $parts;
                    break;
                case 0:
                    return $zero;
            }
            $r = $ri;

            while ($qi->compare($zero) > 0) {
                $temp = $qi->multiply($c)->bitwise_split(255);
                if (count($temp) == 2) {
                    list($qi, $ri) = $temp;
                } else {
                    $qi = $zero;
                    list($ri) = $temp;
                }
                $r = $r->add($ri);
            }

            while ($r->compare($className::$modulo) > 0) {
                $r = $r->subtract($className::$modulo);
            }
            return $r;
        });
        */}/**
     * Recover X from Y
     *
     * Implements steps 2-4 at https://tools.ietf.org/html/rfc8032#section-5.1.3
     *
     * Used by EC\Keys\Common.php
     *
     * @param BigInteger $y
     * @param boolean $sign
     * @return object[]
     */(,){=();=();=();=()();=();(()){(){();};}// find the square root
/* we don't do $x2->squareRoot() because, quoting from
           https://tools.ietf.org/html/rfc8032#section-5.1.1:

           "For point decoding or "decompression", square roots modulo p are
            needed.  They can be computed using the Tonelli-Shanks algorithm or
            the special case for p = 5 (mod 8).  To find a square root of a,
            first compute the candidate root x = a^((p+3)/8) (mod p)."
         */=()(());=();=();// If v x^2 = -u (mod p), set x <-- x * 2^((p-1)/4), which is a square root.
(!()()()){=()(());=();=();=();(!()()()){();}}(()){=();}[,];}/**
     * Extract Secret Scalar
     *
     * Implements steps 1-3 at https://tools.ietf.org/html/rfc8032#section-5.1.5
     *
     * Used by the various key handlers
     *
     * @param string $str
     * @return \phpseclib3\Math\PrimeField\Integer
     */(){(()){();}// 1.  Hash the 32-byte private key using SHA-512, storing the digest in
//     a 64-octet large buffer, denoted h.  Only the lower 32 bytes are
//     used for generating the public key.
=();=();=(,,);// 2.  Prune the buffer: The lowest three bits of the first octet are
//     cleared, the highest bit of the last octet is cleared, and the
//     second highest bit of the last octet is set.
[]=[]&();=();[]=([]&())|();// 3.  Interpret the buffer as the little-endian integer, forming a
//     secret scalar s.
=(,);=();=;;}/**
     * Encode a point as a string
     *
     * @param array $point
     * @return string
     */(){(,)=;=();[]=[]&();(()){[]=[]|();}=();;}/**
     * Creates a random scalar multiplier
     *
     * @return \phpseclib3\Math\PrimeField\Integer
     */(){(());}/**
     * Converts an affine point to an extended homogeneous coordinate
     *
     * From https://tools.ietf.org/html/rfc8032#section-5.1.4 :
     *
     * A point (x,y) is represented in extended homogeneous coordinates (X, Y, Z, T),
     * with x = X/Z, y = Y/Z, x * y = T/Z.
     *
     * @return \phpseclib3\Math\PrimeField\Integer[]
     */(){(()){[,,,];}(([])){;}[]=;[]=[]([]);;}/**
     * Doubles a point on a curve
     *
     * @return FiniteField[]
     */(){(!()){();}(!()){[];}(!([])){();}// from https://tools.ietf.org/html/rfc8032#page-12
(,,,)=;=();=();=()();=();=();=(());=();=();=();=();=();=();[,,,];}/**
     * Adds two points on the curve
     *
     * @return FiniteField[]
     */(,){(!()){();}(!()!()){(()){;}(()){;}[];}(!([])!([])){();}([]([])){![]([])?[]:();}// from https://tools.ietf.org/html/rfc8032#page-12
(,,,)=;(,,,)=;=()(());=()(());=()()();=()();=();=();=();=();=();=();=();=();[,,,];}}