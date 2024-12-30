/**
 * XML Formatted DSA Key Handler
 *
 * While XKMS defines a private key format for RSA it does not do so for DSA. Quoting that standard:
 *
 * "[XKMS] does not specify private key parameters for the DSA signature algorithm since the algorithm only
 *  supports signature modes and so the application of server generated keys and key recovery is of limited
 *  value"
 *
 * PHP version 5
 *
 * @category  Crypt
 * @package   DSA
 * @author    Jim Wigginton <terrafrost@php.net>
 * @copyright 2015 Jim Wigginton
 * @license   http://www.opensource.org/licenses/mit-license.html  MIT License
 * @link      http://phpseclib.sourceforge.net
 */;;;;/**
 * XML Formatted DSA Key Handler
 *
 * @package DSA
 * @author  Jim Wigginton <terrafrost@php.net>
 * @access  public
 */{/**
     * Break a public or private key down into its constituent components
     *
     * @access public
     * @param string $key
     * @param string $password optional
     * @return array
     */(,=){(!()){(.());}=();=();((,,)){=..;}(!()){();}=();=[,,,,,,];(){// $dom->getElementsByTagName($key) is case-sensitive
=("");(!){;}=((()),);(){:// a prime modulus meeting the [DSS] requirements
// Parameters P, Q, and G can be public and common to a group of users. They might be known
// from application context. As such, they are optional but P and Q must either both appear
// or both be absent
[]=;;:// an integer in the range 2**159 < Q < 2**160 which is a prime divisor of P-1
[]=;;:// an integer with certain properties with respect to P and Q
[]=;;:// G**X mod P (where X is part of the private key and not made public)
[]=;// the remaining options do not do anything
:// (P - 1) / Q
// Parameter J is available for inclusion solely for efficiency as it is calculatable from
// P and Q
:// a DSA prime generation seed
// Parameters seed and pgenCounter are used in the DSA prime number generation algorithm
// specified in [DSS]. As such, they are optional but must either both be present or both
// be absent
:// a DSA prime generation counter
}}();(!([])){();}(){!([]):!([]):!([]):[[]];};}/**
     * Convert a public key to the appropriate format
     *
     * See https://www.w3.org/TR/xmldsig-core/#sec-DSAKeyValue
     *
     * @access public
     * @param \phpseclib3\Math\BigInteger $p
     * @param \phpseclib3\Math\BigInteger $q
     * @param \phpseclib3\Math\BigInteger $g
     * @param \phpseclib3\Math\BigInteger $y
     * @return string
     */(,,,){..(())...(())...(())...(())..;}}