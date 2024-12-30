/**
 * XML Formatted EC Key Handler
 *
 * More info:
 *
 * https://www.w3.org/TR/xmldsig-core/#sec-ECKeyValue
 * http://en.wikipedia.org/wiki/XML_Signature
 *
 * PHP version 5
 *
 * @category  Crypt
 * @package   EC
 * @author    Jim Wigginton <terrafrost@php.net>
 * @copyright 2015 Jim Wigginton
 * @license   http://www.opensource.org/licenses/mit-license.html  MIT License
 * @link      http://phpseclib.sourceforge.net
 */;;;;;;;;;/**
 * XML Formatted EC Key Handler
 *
 * @package EC
 * @author  Jim Wigginton <terrafrost@php.net>
 * @access  public
 */{;/**
     * Default namespace
     *
     * @var string
     */;/**
     * Flag for using RFC4050 syntax
     *
     * @var bool
     */=;/**
     * Break a public or private key down into its constituent components
     *
     * @access public
     * @param string $key
     * @param string $password optional
     * @return array
     */(,=){();(!()){(.());}=();=(,);(){=;}=(,);(){=;}=();((,,)){=..;}(!()){();();}=();();=();=(,,);=(,)?(,):(.,);();(,);}/**
     * Case-insensitive xpath query
     *
     * @param \DOMXPath $xpath
     * @param string $name
     * @param string $error optional
     * @param bool $decode optional
     * @return \DOMNodeList
     */(,,=,=){=;=(,);(){"";}=();(!()){;}(!){();}?(()):();}/**
     * Finds the first element in the relevant namespace, strips the namespacing and returns the XML for that element.
     *
     * @param string $xml
     * @param string $ns
     */(,){=();(!()){;}=();=("");(!){;}=();=();(,);();}/**
     * Decodes the value
     *
     * @param string $value
     */(){(([,,,],,));}/**
     * Extract points from an XML document
     *
     * @param \DOMXPath $xpath
     * @param \phpseclib3\Crypt\EC\BaseCurves\Base $curve
     * @return object[]
     */(,){=(,);=(,);(!!()()){();}(!!()()){();}=[((()())),((()()))];(!()){();};}/**
     * Returns an instance of \phpseclib3\Crypt\EC\BaseCurves\Base based
     * on the curve parameters
     *
     * @param \DomXPath $xpath
     * @return \phpseclib3\Crypt\EC\BaseCurves\Base|false
     */(){=(,);(){=()();=(,,);=(,);(){(..);}=.;(!()){(..);}();}=(,);(){();}=(,);(!){();}=[[],[],[],[,,],[]];(){(){=(,);(!){;}=(,,);$=(());};}=(,,);=(,,);=(,,);=(,,);(){:=();((,));((,),(,));=(.,);();((,));;::::(..);}}/**
     * Returns an instance of \phpseclib3\Crypt\EC\BaseCurves\Base based
     * on the curve parameters
     *
     * @param \DomXPath $xpath
     * @return \phpseclib3\Crypt\EC\BaseCurves\Base|false
     */(){=[[],[]];(){(){=(,);(!){;}=(,,);$=();};}=(,,,);=(,,,);=(,,,);=(,,,);=(,,,);(){:=();=([,,,],,);(());=([,,,],,);=([,,,],,);((),());=([,,,],,);=([,,,],,);((),());=([,,,],,);(());;:(..);}}/**
     * Sets the namespace. dsig11 is the most common one.
     *
     * Set to null to unset. Used only for creating public keys.
     *
     * @param string $namespace
     */(){=;}/**
     * Uses the XML syntax specified in https://tools.ietf.org/html/rfc4050
     */(){=;}/**
     * Uses the XML syntax specified in https://www.w3.org/TR/xmldsig-core/#sec-ECParameters
     */(){=;}/**
     * Convert a public key to the appropriate format
     *
     * @param \phpseclib3\Crypt\EC\BaseCurves\Base $curve
     * @param \phpseclib3\Math\Common\FiniteField\Integer[] $publicKey
     * @param array $options optional
     * @return string
     */(,,=[]){();(){();}(()){==;}{=.;=.;}(){......(,,).........[]......[].........;}=.[]().[]();......(,,).....().......;}/**
     * Encode Parameters
     *
     * @param \phpseclib3\Crypt\EC\BaseCurves\Base $curve
     * @param string $pre
     * @param array $options optional
     * @return string|false
     */(,,=[]){=(,,);(([])){=...[[]].;?.(,,).:;}(){=.......;=[];([][]){:.......[][]........;=();=();(,)=();;:(.[][].);}...................................................................()............;;}(([])){=.......;=[];([][]){:.......([][]())........;;:(.[][].);}...........([][])........([][])............([])........([]).......;;}}}