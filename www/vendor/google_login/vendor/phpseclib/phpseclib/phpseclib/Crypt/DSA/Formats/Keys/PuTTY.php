/**
 * PuTTY Formatted DSA Key Handler
 *
 * puttygen does not generate DSA keys with an N of anything other than 160, however,
 * it can still load them and convert them. PuTTY will load them, too, but SSH servers
 * won't accept them. Since PuTTY formatted keys are primarily used with SSH this makes
 * keys with N > 160 kinda useless, hence this handlers not supporting such keys.
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
 * PuTTY Formatted DSA Key Handler
 *
 * @package DSA
 * @author  Jim Wigginton <terrafrost@php.net>
 * @access  public
 */{/**
     * Public Handler
     *
     * @var string
     * @access private
     */=;/**
     * Algorithm Identifier
     *
     * @var array
     * @access private
     */=[];/**
     * Break a public or private key down into its constituent components
     *
     * @access public
     * @param string $key
     * @param string $password optional
     * @return array
     */(,=){=(,);(!([])){;}();([],[]);(,,,)=(,);()=(,);(,,,,,);}/**
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
     */(,,,,,=,=[]){(()){();}=(,,,,);=(,);(,,,,);}/**
     * Convert a public key to the appropriate format
     *
     * @access public
     * @param \phpseclib3\Math\BigInteger $p
     * @param \phpseclib3\Math\BigInteger $q
     * @param \phpseclib3\Math\BigInteger $g
     * @param \phpseclib3\Math\BigInteger $y
     * @return string
     */(,,,){(()){();}((,,,,),);}}