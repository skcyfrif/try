/**
 * PKCS#8 Formatted RSA-PSS Key Handler
 *
 * PHP version 5
 *
 * Used by PHP's openssl_public_encrypt() and openssl's rsautl (when -pubin is set)
 *
 * Processes keys with the following headers:
 *
 * -----BEGIN ENCRYPTED PRIVATE KEY-----
 * -----BEGIN PRIVATE KEY-----
 * -----BEGIN PUBLIC KEY-----
 *
 * Analogous to "openssl genpkey -algorithm rsa-pss".
 *
 * @category  Crypt
 * @package   RSA
 * @author    Jim Wigginton <terrafrost@php.net>
 * @copyright 2015 Jim Wigginton
 * @license   http://www.opensource.org/licenses/mit-license.html  MIT License
 * @link      http://phpseclib.sourceforge.net
 */;;;;;;/**
 * PKCS#8 Formatted RSA-PSS Key Handler
 *
 * @package RSA
 * @author  Jim Wigginton <terrafrost@php.net>
 * @access  public
 */{/**
     * OID Name
     *
     * @var string
     * @access private
     */=;/**
     * OID Value
     *
     * @var string
     * @access private
     */=;/**
     * OIDs loaded
     *
     * @var bool
     * @access private
     */=;/**
     * Child OIDs loaded
     *
     * @var bool
     * @access private
     */=;/**
     * Initialize static variables
     */(){(!){([,,,,,,,,,,]);=;}}/**
     * Break a public or private key down into its constituent components
     *
     * @access public
     * @param string $key
     * @param string $password optional
     * @return array
     */(,=){();(!()){(.());}=[(,)];=(,);=([])?:;=+([.]);(([.][])){=([.][]);(){();}=([],);}{=[];}(([][])){=([][]);(){();}[][]=([],);}{[]=[,[]];}(!([][])){[][]=;}[]=(,,[][]);[]=(,,[][][]);(([])){[]=[]();}(([])){[]=[];};}/**
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
     */(,,,,,,=,=[]){();=(,,,,,);=();=();(,[],,,);}/**
     * Convert a public key to the appropriate format
     *
     * @access public
     * @param \phpseclib3\Math\BigInteger $n
     * @param \phpseclib3\Math\BigInteger $e
     * @param array $options optional
     * @return string
     */(,,=[]){();=(,);=();=();(,);}/**
     * Encodes PSS parameters
     *
     * @access public
     * @param array $options
     * @return string
     */(){/*
         The trailerField field is an integer.  It provides
         compatibility with IEEE Std 1363a-2004 [P1363A].  The value
         MUST be 1, which represents the trailer field with hexadecimal
         value 0xBC.  Other trailer fields, including the trailer field
         composed of HashID concatenated with 0xCC that is specified in
         IEEE Std 1363a, are not supported.  Implementations that
         perform signature generation MUST omit the trailerField field,
         indicating that the default trailer field value was used.
         Implementations that perform signature validation MUST
         recognize both a present trailerField field with value 1 and an
         absent trailerField field.

         source: https://tools.ietf.org/html/rfc4055#page-9
        */=[()];(([])){[][]=.[];}(([])){=[.[]];=(,);[]=[,()];}(([])){[]=([]);}((,));}}