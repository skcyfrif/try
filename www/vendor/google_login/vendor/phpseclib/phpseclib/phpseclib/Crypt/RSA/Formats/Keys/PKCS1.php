/**
 * PKCS#1 Formatted RSA Key Handler
 *
 * PHP version 5
 *
 * Used by File/X509.php
 *
 * Processes keys with the following headers:
 *
 * -----BEGIN RSA PRIVATE KEY-----
 * -----BEGIN RSA PUBLIC KEY-----
 *
 * Analogous to ssh-keygen's pem format (as specified by -m)
 *
 * @category  Crypt
 * @package   RSA
 * @author    Jim Wigginton <terrafrost@php.net>
 * @copyright 2015 Jim Wigginton
 * @license   http://www.opensource.org/licenses/mit-license.html  MIT License
 * @link      http://phpseclib.sourceforge.net
 */;;;;;;/**
 * PKCS#1 Formatted RSA Key Handler
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
     */(,=){(!()){(.());}((,)){=[];}((,)){=[];}{=[];}=(,);=();(()){();}=([],);(()){[[],[],[],[[],[]],[[],[]],[[]]];([]){([]){[][]=[];[][]=[];[][]=[];}}(!([])){[]=;};}=([],);(!()){();}(!([])){[]=;}+;}/**
     * Convert a private key to the appropriate format.
     *
     * @access public
     * @param \phpseclib3\Math\BigInteger $n
     * @param \phpseclib3\Math\BigInteger $e
     * @param \phpseclib3\Math\BigInteger $d
     * @param array $primes
     * @param array $exponents
     * @param array $coefficients
     * @param string $password optional
     * @param array $options optional
     * @return string
     */(,,,,,,=,=[]){=();=[?:,,,,[],[],[],[],[]];(=;;){[][]=[[],[],[]];}=(,);(,,,);}/**
     * Convert a public key to the appropriate format
     *
     * @access public
     * @param \phpseclib3\Math\BigInteger $n
     * @param \phpseclib3\Math\BigInteger $e
     * @return string
     */(,){=[,];=(,);(,);}}