/**
 * OpenSSH Formatted DSA Key Handler
 *
 * PHP version 5
 *
 * Place in $HOME/.ssh/authorized_keys
 *
 * @category  Crypt
 * @package   DSA
 * @author    Jim Wigginton <terrafrost@php.net>
 * @copyright 2015 Jim Wigginton
 * @license   http://www.opensource.org/licenses/mit-license.html  MIT License
 * @link      http://phpseclib.sourceforge.net
 */;;;;;/**
 * OpenSSH Formatted DSA Key Handler
 *
 * @package DSA
 * @author  Jim Wigginton <terrafrost@php.net>
 * @access  public
 */{/**
     * Supported Key Types
     *
     * @var array
     */=[];/**
     * Break a public or private key down into its constituent components
     *
     * @access public
     * @param string $key
     * @param string $password optional
     * @return array
     */(,=){=(,);(([])){()=(,[]);([]){("[]");}(,,,,,)=(,[]);(,,,,,);}(,,,)=(,[]);=[];(,,,,);}/**
     * Convert a public key to the appropriate format
     *
     * @access public
     * @param \phpseclib3\Math\BigInteger $p
     * @param \phpseclib3\Math\BigInteger $q
     * @param \phpseclib3\Math\BigInteger $g
     * @param \phpseclib3\Math\BigInteger $y
     * @param array $options optional
     * @return string
     */(,,,,=[]){(()){();}// from <http://tools.ietf.org/html/rfc4253#page-15>:
// string    "ssh-dss"
// mpint     p
// mpint     q
// mpint     g
// mpint     y
=(,,,,,);(([])?[]:){;}=([])?[]:;=.()..;;}/**
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
     */(,,,,,=,=[]){=(,,,,[]);=(,,,,,,);(,,,);}}