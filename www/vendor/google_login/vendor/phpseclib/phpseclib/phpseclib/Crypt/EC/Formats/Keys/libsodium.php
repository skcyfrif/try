/**
 * libsodium Key Handler
 *
 * Different NaCl implementations store the key differently.
 * https://blog.mozilla.org/warner/2011/11/29/ed25519-keys/ elaborates.
 * libsodium appears to use the same format as SUPERCOP.
 *
 * PHP version 5
 *
 * @category  Crypt
 * @package   EC
 * @author    Jim Wigginton <terrafrost@php.net>
 * @copyright 2015 Jim Wigginton
 * @license   http://www.opensource.org/licenses/mit-license.html  MIT License
 * @link      http://phpseclib.sourceforge.net
 */;;;;/**
 * libsodium Key Handler
 *
 * @package EC
 * @author  Jim Wigginton <terrafrost@php.net>
 * @access  public
 */{;/**
     * Is invisible flag
     *
     * @access private
     */=;/**
     * Break a public or private key down into its constituent components
     *
     * @access public
     * @param string $key
     * @param string $password optional
     * @return array
     */(,=){(()){:=;;:=(,,);=(,-);;:=(,-);((,,)){();}=(,,);;:();}=();=[];(()){[]=();}[]=()?(,):((),[]);;}/**
     * Convert an EC public key to the appropriate format
     *
     * @access public
     * @param \phpseclib3\Crypt\EC\Curves\Ed25519 $curve
     * @param \phpseclib3\Math\Common\FiniteField\Integer[] $publicKey
     * @return string
     */(,){();}/**
     * Convert a private key to the appropriate format.
     *
     * @access public
     * @param \phpseclib3\Math\Common\FiniteField\Integer $privateKey
     * @param \phpseclib3\Crypt\EC\Curves\Ed25519 $curve
     * @param \phpseclib3\Math\Common\FiniteField\Integer[] $publicKey
     * @param string $password optional
     * @return string
     */(,,,=){(!()){();}(()){();}(!()()){();}.();}}