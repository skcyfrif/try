/**
 * Miccrosoft BLOB Formatted RSA Key Handler
 *
 * More info:
 *
 * https://msdn.microsoft.com/en-us/library/windows/desktop/aa375601(v=vs.85).aspx
 *
 * PHP version 5
 *
 * @category  Crypt
 * @package   RSA
 * @author    Jim Wigginton <terrafrost@php.net>
 * @copyright 2015 Jim Wigginton
 * @license   http://www.opensource.org/licenses/mit-license.html  MIT License
 * @link      http://phpseclib.sourceforge.net
 */;;;;;/**
 * Microsoft BLOB Formatted RSA Key Handler
 *
 * @package RSA
 * @author  Jim Wigginton <terrafrost@php.net>
 * @access  public
 */{/**
     * Public/Private Key Pair
     *
     * @access private
     */=;/**
     * Public Key
     *
     * @access private
     */=;/**
     * Public Key
     *
     * @access private
     */=;/**
     * RSA public key exchange algorithm
     *
     * @access private
     */=;/**
     * RSA public key exchange algorithm
     *
     * @access private
     */=;/**
     * Public Key
     *
     * @access private
     */=;/**
     * Private Key
     *
     * @access private
     */=;/**
     * Break a public or private key down into its constituent components
     *
     * @access public
     * @param string $key
     * @param string $password optional
     * @return array
     */(,=){(!()){(.());}=();(!()){();}(()<){();}// PUBLICKEYSTRUC  publickeystruc
// https://msdn.microsoft.com/en-us/library/windows/desktop/aa387453(v=vs.85).aspx
((,(,)));/**
         * @var string $type
         * @var string $version
         * @var integer $reserved
         * @var integer $algo
         */(()){::=;;:=;;:();}=[];// https://msdn.microsoft.com/en-us/library/windows/desktop/aa375549(v=vs.85).aspx
(){::;:();}// RSAPUBKEY rsapubkey
// https://msdn.microsoft.com/en-us/library/windows/desktop/aa387685(v=vs.85).aspx
// could do V for pubexp but that's unsigned 32-bit whereas some PHP installs only do signed 32-bit
((,(,)));/**
         * @var integer $magic
         * @var integer $bitlen
         * @var string $pubexp
         */(){:[]=;:;:();}=/;(()*()*){();}[[]?:]=((),);// BYTE modulus[rsapubkey.bitlen/8]
[]=(((,/)),);(){;}[]=;// BYTE prime1[rsapubkey.bitlen/16]
[]=[(((,/)),)];// BYTE prime2[rsapubkey.bitlen/16]
[][]=(((,/)),);// BYTE exponent1[rsapubkey.bitlen/16]
[]=[(((,/)),)];// BYTE exponent2[rsapubkey.bitlen/16]
[][]=(((,/)),);// BYTE coefficient[rsapubkey.bitlen/16]
[]=[(((,/)),)];(([])){[]=[];}// BYTE privateExponent[rsapubkey.bitlen/8]
[]=(((,/)),);;}/**
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
     * @return string
     */(,,,,,,=){(()){();}(!()()){();}=(());=((()),,);=(,(),(),,);(,,*(),);;([]());([]());([]());([]());([]());(());();}/**
     * Convert a public key to the appropriate format
     *
     * @access public
     * @param \phpseclib3\Math\BigInteger $n
     * @param \phpseclib3\Math\BigInteger $e
     * @return string
     */(,){=(());=((()),,);=(,(),(),,);(,,*(),);;();}}