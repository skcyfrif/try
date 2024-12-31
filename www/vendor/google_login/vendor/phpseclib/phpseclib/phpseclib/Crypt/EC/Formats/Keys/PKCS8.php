/**
 * PKCS#8 Formatted EC Key Handler
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
 * @package   EC
 * @author    Jim Wigginton <terrafrost@php.net>
 * @copyright 2015 Jim Wigginton
 * @license   http://www.opensource.org/licenses/mit-license.html  MIT License
 * @link      http://phpseclib.sourceforge.net
 */;;;;;;;;;;;;;/**
 * PKCS#8 Formatted EC Key Handler
 *
 * @package EC
 * @author  Jim Wigginton <terrafrost@php.net>
 * @access  public
 */{;/**
     * OID Name
     *
     * @var array
     * @access private
     */=[,,];/**
     * OID Value
     *
     * @var string
     * @access private
     */=[,,];/**
     * Break a public or private key down into its constituent components
     *
     * @access public
     * @param string $key
     * @param string $password optional
     * @return array
     */(,=){// initialize_static_variables() is defined in both the trait and the parent class
// when it's defined in two places it's the traits one that's called
// the parent one is needed, as well, but the parent one is called by other methods
// in the parent class as needed and in the context of the parent it's the parent
// one that's called
();(!()){(.());}=(,);=(,);=([])?:;(){!:();:();}([.][]){::();}=([.][]);=([],);(!){();}=[];[]=();(){[]=(.[],[]);;}=([]);=([],);(([])[]){();}=([],);[]=[]();[]=([],[]);;}/**
     * Break a public or private EdDSA key down into its constituent components
     *
     * @return array
     */(){=[];(([])){[]=[][]?():();// 0x04 == octet string
// 0x20 == length (32 bytes)
(([],,)){();}[]=[](([],));}(([])){(!([])){[]=[][]?():();}[]=([],[]);}(([])!([])){[]=[]([](),[]);};}/**
     * Convert an EC public key to the appropriate format
     *
     * @access public
     * @param \phpseclib3\Crypt\EC\BaseCurves\Base $curve
     * @param \phpseclib3\Math\Common\FiniteField\Integer[] $publicKey
     * @param array $options optional
     * @return string
     */(,,=[]){();(){();}(){((),,?:);}=((,,));=.[]().[]();(,,);}/**
     * Convert a private key to the appropriate format.
     *
     * @access public
     * @param \phpseclib3\Math\Common\FiniteField\Integer $privateKey
     * @param \phpseclib3\Crypt\EC\BaseCurves\Base $curve
     * @param \phpseclib3\Math\Common\FiniteField\Integer[] $publicKey
     * @param string $password optional
     * @param array $options optional
     * @return string
     */(,,,=,=[]){();(){();}(){(.,[],,,?:,.());}=.[]().[]();=((,,));=[,(),//'parameters' => $params,
.];=(,);(,[],,,,,);}}