/**
 * PKCS#1 Formatted DSA Key Handler
 *
 * PHP version 5
 *
 * Used by File/X509.php
 *
 * Processes keys with the following headers:
 *
 * -----BEGIN DSA PRIVATE KEY-----
 * -----BEGIN DSA PUBLIC KEY-----
 * -----BEGIN DSA PARAMETERS-----
 *
 * Analogous to ssh-keygen's pem format (as specified by -m)
 *
 * Also, technically, PKCS1 decribes RSA but I am not aware of a formal specification for DSA.
 * The DSA private key format seems to have been adapted from the RSA private key format so
 * we're just re-using that as the name.
 *
 * @category  Crypt
 * @package   DSA
 * @author    Jim Wigginton <terrafrost@php.net>
 * @copyright 2015 Jim Wigginton
 * @license   http://www.opensource.org/licenses/mit-license.html  MIT License
 * @link      http://phpseclib.sourceforge.net
 */;;;;;;/**
 * PKCS#1 Formatted DSA Key Handler
 *
 * @package RSA
 * @author  Jim Wigginton <terrafrost@php.net>
 * @access  public
 */{/**
     * Break a public or private key down into its constituent components
     *
     * @access public
     * @param string $key
     * @param string $password optional
     * @return array
     */(,=){=(,);=();(()){();}=([],);(()){;}=([],);(()){;}=([],);(()){;}();}/**
     * Convert DSA parameters to the appropriate format
     *
     * @access public
     * @param \phpseclib3\Math\BigInteger $p
     * @param \phpseclib3\Math\BigInteger $q
     * @param \phpseclib3\Math\BigInteger $g
     * @return string
     */(,,){=[,,];=(,);.((),).;}/**
     * Convert a private key to the appropriate format.
     *
     * @access public
     * @param \phpseclib3\Math\BigInteger $p
     * @param \phpseclib3\Math\BigInteger $q
     * @param \phpseclib3\Math\BigInteger $g
     * @param \phpseclib3\Math\BigInteger $y
     * @param \phpseclib3\Math\BigInteger $x
     * @param string $password optional
     * @param array $options optional
     * @return string
     */(,,,,,=,=[]){=[,,,,,];=(,);(,,,);}/**
     * Convert a public key to the appropriate format
     *
     * @access public
     * @param \phpseclib3\Math\BigInteger $p
     * @param \phpseclib3\Math\BigInteger $q
     * @param \phpseclib3\Math\BigInteger $g
     * @param \phpseclib3\Math\BigInteger $y
     * @return string
     */(,,,){=(,);(,);}}