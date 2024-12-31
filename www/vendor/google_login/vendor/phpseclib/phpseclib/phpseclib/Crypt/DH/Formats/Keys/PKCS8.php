/**
 * PKCS#8 Formatted DH Key Handler
 *
 * PHP version 5
 *
 * Processes keys with the following headers:
 *
 * -----BEGIN ENCRYPTED PRIVATE KEY-----
 * -----BEGIN PRIVATE KEY-----
 * -----BEGIN PUBLIC KEY-----
 *
 * @category  Crypt
 * @package   DH
 * @author    Jim Wigginton <terrafrost@php.net>
 * @copyright 2015 Jim Wigginton
 * @license   http://www.opensource.org/licenses/mit-license.html  MIT License
 * @link      http://phpseclib.sourceforge.net
 */;;;;;;/**
 * PKCS#8 Formatted DH Key Handler
 *
 * @package DH
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
     */(,=){(!()){(.());}=(,);=(,);=([])?:;(){!:();:();}=([.][]);(()){();}=([],);(!()){();}=([]);(){():!():!([][]):![][]:();}[]=[][];;}/**
     * Convert a private key to the appropriate format.
     *
     * @access public
     * @param \phpseclib3\Math\BigInteger $prime
     * @param \phpseclib3\Math\BigInteger $base
     * @param \phpseclib3\Math\BigInteger $privateKey
     * @param \phpseclib3\Math\BigInteger $publicKey
     * @param string $password optional
     * @param array $options optional
     * @return string
     */(,,,,=,=[]){=[,];=(,);=();=(,[]);(,[],,,);}/**
     * Convert a public key to the appropriate format
     *
     * @access public
     * @param \phpseclib3\Math\BigInteger $prime
     * @param \phpseclib3\Math\BigInteger $base
     * @param \phpseclib3\Math\BigInteger $publicKey
     * @param array $options optional
     * @return string
     */(,,,=[]){=[,];=(,);=();=(,[]);(,);}}