/**
 * "PKCS1" (RFC5915) Formatted EC Key Handler
 *
 * PHP version 5
 *
 * Used by File/X509.php
 *
 * Processes keys with the following headers:
 *
 * -----BEGIN EC PRIVATE KEY-----
 * -----BEGIN EC PARAMETERS-----
 *
 * Technically, PKCS1 is for RSA keys, only, but we're using PKCS1 to describe
 * DSA, whose format isn't really formally described anywhere, so might as well
 * use it to describe this, too. PKCS1 is easier to remember than RFC5915, after
 * all. I suppose this could also be named IETF but idk
 *
 * @category  Crypt
 * @package   EC
 * @author    Jim Wigginton <terrafrost@php.net>
 * @copyright 2015 Jim Wigginton
 * @license   http://www.opensource.org/licenses/mit-license.html  MIT License
 * @link      http://phpseclib.sourceforge.net
 */;;;;;;;;;;;;/**
 * "PKCS1" (RFC5915) Formatted EC Key Handler
 *
 * @package EC
 * @author  Jim Wigginton <terrafrost@php.net>
 * @access  public
 */{;/**
     * Break a public or private key down into its constituent components
     *
     * @access public
     * @param string $key
     * @param string $password optional
     * @return array
     */(,=){();(!()){(.());}((,)(,)){=[];(,,);=([],);=();(()){();}=([],);(!()){();}(([])){[]=([]);}(,,);=([],);=();(()){();}=([],);(!()){();}=();// comparing $ecParams and $components['curve'] directly won't work because they'll have different Math\Common\FiniteField classes
// even if the modulo is the same
(([])(,,[])([],,[])){();}(!([])){[]=;}=([],);[]=[]();[]=([])?([],[]):[]([](),[]);;}=(,);=();(()){();}=([],);(()){[()];}=([],);(!()){();}(!([])){();}=[];[]=([]);=([],);[]=[]();[]=([])?([],[]):[]([](),[]);;}/**
     * Convert EC parameters to the appropriate format
     *
     * @access public
     * @return string
     */(,=[]){();(){();}=(,,);.((),).;}/**
     * Convert a private key to the appropriate format.
     *
     * @access public
     * @param \phpseclib3\Math\Common\FiniteField\Integer $privateKey
     * @param \phpseclib3\Crypt\EC\BaseCurves\Base $curve
     * @param \phpseclib3\Math\Common\FiniteField\Integer[] $publicKey
     * @param string $password optional
     * @param array $options optional
     * @return string
     */(,,,=,=[]){();(){();}=.[]().[]();=[,(),(()),.];=(,);(,,,);}}