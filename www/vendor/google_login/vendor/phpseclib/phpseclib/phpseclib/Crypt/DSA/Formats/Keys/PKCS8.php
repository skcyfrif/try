/**
 * PKCS#8 Formatted DSA Key Handler
 *
 * PHP version 5
 *
 * Processes keys with the following headers:
 *
 * -----BEGIN ENCRYPTED PRIVATE KEY-----
 * -----BEGIN PRIVATE KEY-----
 * -----BEGIN PUBLIC KEY-----
 *
 * Analogous to ssh-keygen's pkcs8 format (as specified by -m). Although PKCS8
 * is specific to private keys it's basically creating a DER-encoded wrapper
 * for keys. This just extends that same concept to public keys (much like ssh-keygen)
 *
 * @category  Crypt
 * @package   DSA
 * @author    Jim Wigginton <terrafrost@php.net>
 * @copyright 2015 Jim Wigginton
 * @license   http://www.opensource.org/licenses/mit-license.html  MIT License
 * @link      http://phpseclib.sourceforge.net
 */;;;;;;/**
 * PKCS#8 Formatted DSA Key Handler
 *
 * @package DSA
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
     * Child OIDs loaded
     *
     * @var bool
     * @access private
     */=;/**
     * Break a public or private key down into its constituent components
     *
     * @access public
     * @param string $key
     * @param string $password optional
     * @return array
     */(,=){(!()){(.());}=(,);=(,);=([])?:;(){!:();:();}=([.][]);(()){();}=([],);(!()){();}=([]);(()){();}=?:;[]=([],);(![]){();}(([])){[]=[];};}/**
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
     */(,,,,,=,=[]){=[,,];=(,);=();=(,);(,[],,,);}/**
     * Convert a public key to the appropriate format
     *
     * @access public
     * @param \phpseclib3\Math\BigInteger $p
     * @param \phpseclib3\Math\BigInteger $q
     * @param \phpseclib3\Math\BigInteger $g
     * @param \phpseclib3\Math\BigInteger $y
     * @param array $options optional
     * @return string
     */(,,,,=[]){=[,,];=(,);=();=(,);(,);}}