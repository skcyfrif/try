/**
 * Generic EC Key Parsing Helper functions
 *
 * PHP version 5
 *
 * @category  Crypt
 * @package   EC
 * @author    Jim Wigginton <terrafrost@php.net>
 * @copyright 2015 Jim Wigginton
 * @license   http://www.opensource.org/licenses/mit-license.html  MIT License
 * @link      http://phpseclib.sourceforge.net
 */;;;;;;;;;;;;/**
 * Generic EC Key Parsing Helper functions
 *
 * @package EC
 * @author  Jim Wigginton <terrafrost@php.net>
 * @access  public
 */{/**
     * Curve OIDs
     *
     * @var array
     */=[];/**
     * Child OIDs loaded
     *
     * @var bool
     */=;/**
     * Use Named Curves
     *
     * @var bool
     */=;/**
     * Initialize static variables
     */(){(()){// the sec* curves are from the standards for efficient cryptography group
// sect* curves are curves over binary finite fields
// secp* curves are curves over prime finite fields
// sec*r* curves are regular curves; sec*k* curves are koblitz curves
// brainpool*r* curves are regular prime finite field curves
// brainpool*t* curves are twisted versions of the brainpool*r* curves
=[,// J.5.1, example 1 (aka secp192r1)
,// J.5.1, example 2
,// J.5.1, example 3
,// J.5.2, example 1
,// J.5.2, example 2
,// J.5.2, example 3
,// J.5.3, example 1 (aka secp256r1)
// https://tools.ietf.org/html/rfc5656#section-10
,// aka secp256r1
,// aka secp384r1
,// aka secp521r1
,// aka sect163k1
,// aka secp192r1
,// aka secp224r1
,// aka sect233k1
,// aka sect233r1
,// aka sect283k1
,// aka sect409k1
,// aka sect409r1
,// aka sect571k1
// from https://tools.ietf.org/html/rfc5915
,// aka prime192v1
,,,,,,// aka prime256v1
,,,,,,,,// from http://www.secg.org/SEC2-Ver-1.0.pdf
,,,,,,,,,,,,,,,,,,// from http://citeseerx.ist.psu.edu/viewdoc/download?doi=10.1.1.202.2977&rep=rep1&type=pdf#page=36
/*
                'c2pnb163v1' => '1.2.840.10045.3.0.1', // J.4.1, example 1
                'c2pnb163v2' => '1.2.840.10045.3.0.2', // J.4.1, example 2
                'c2pnb163v3' => '1.2.840.10045.3.0.3', // J.4.1, example 3
                'c2pnb172w1' => '1.2.840.10045.3.0.4', // J.4.2, example 1
                'c2tnb191v1' => '1.2.840.10045.3.0.5', // J.4.3, example 1
                'c2tnb191v2' => '1.2.840.10045.3.0.6', // J.4.3, example 2
                'c2tnb191v3' => '1.2.840.10045.3.0.7', // J.4.3, example 3
                'c2onb191v4' => '1.2.840.10045.3.0.8', // J.4.3, example 4
                'c2onb191v5' => '1.2.840.10045.3.0.9', // J.4.3, example 5
                'c2pnb208w1' => '1.2.840.10045.3.0.10', // J.4.4, example 1
                'c2tnb239v1' => '1.2.840.10045.3.0.11', // J.4.5, example 1
                'c2tnb239v2' => '1.2.840.10045.3.0.12', // J.4.5, example 2
                'c2tnb239v3' => '1.2.840.10045.3.0.13', // J.4.5, example 3
                'c2onb239v4' => '1.2.840.10045.3.0.14', // J.4.5, example 4
                'c2onb239v5' => '1.2.840.10045.3.0.15', // J.4.5, example 5
                'c2pnb272w1' => '1.2.840.10045.3.0.16', // J.4.6, example 1
                'c2pnb304w1' => '1.2.840.10045.3.0.17', // J.4.7, example 1
                'c2tnb359v1' => '1.2.840.10045.3.0.18', // J.4.8, example 1
                'c2pnb368w1' => '1.2.840.10045.3.0.19', // J.4.9, example 1
                'c2tnb431r1' => '1.2.840.10045.3.0.20', // J.4.10, example 1
                */// http://www.ecc-brainpool.org/download/Domain-parameters.pdf
// https://tools.ietf.org/html/rfc5639
,,,,,,,,,,,,,];([,,,// per http://www.secg.org/SEC1-Ver-1.0.pdf#page=84, gnBasis "not used here"
,// NULL
,// Trinomial
// Pentanomial
]+);}}/**
     * Explicitly set the curve
     *
     * If the key contains an implicit curve phpseclib needs the curve
     * to be explicitly provided
     *
     * @param \phpseclib3\Crypt\EC\BaseCurves\Base $curve
     */(){=;}/**
     * Returns an instance of \phpseclib3\Crypt\EC\BaseCurves\Base based
     * on the curve parameters
     *
     * @param array $params
     * @return \phpseclib3\Crypt\EC\BaseCurves\Base|false
     */(){(()>){();}(([])){=.[];(!()){(.[].);}();}(([])){(!()){();};}(([])){=[];([][]){:=();([][]);(([][],),([][],));=(.[],);();([]);;:=();=([][]);=([],);=[[]()];([]){:[]=[]();;:=([]);=([],);[]=[]();[]=[]();[]=[]();}[]=;();=([]/);(([][]),([][]));=(.[],);();([]);;:(.[][].);}}();}/**
     * Extract points from a string
     *
     * Supports both compressed and uncompressed points
     *
     * @param string $str
     * @param \phpseclib3\Crypt\EC\BaseCurves\Base $curve
     * @return object[]
     */(,){(){// first step of point deciding as discussed at the following URL's:
// https://tools.ietf.org/html/rfc8032#section-5.1.3
// https://tools.ietf.org/html/rfc8032#section-5.2.3
=;=();=(([])&);[]=[]&();=(,);((())){();}=(,);(!()){();};}// the first byte of a bit string represents the number of bits in the last byte that are to be ignored but,
// currently, bit strings wanting a non-zero amount of bits trimmed are not supported
((=())){(.());}(){[];}=();=();// point compression is being used
(+){();}// point compression is not being used
(*+){("}}",,);(,,,)=;(){(.());}=[((,)),((,))];(!()){();};}();}/**
     * Encode Parameters
     *
     * @todo Maybe at some point this could be moved to __toString() for each of the curves?
     * @param \phpseclib3\Crypt\EC\BaseCurves\Base $curve
     * @param bool $returnArray optional
     * @param array $options optional
     * @return string|false
     */(,=,=[]){=([])?[]:;=();=();(){(([])){(()){=();=();}?[]:([],);}((.)){(()){;}=();=.;=();(()){;}=();(){:(!){;}(!()(())){;}(()()()()){;}(()()()()){;}(,)=();(,)=();(()()){;}(()()){;}?[]:([],);:(!){;}(()()){;}(()()()()){;}(()()()()){;}(,)=();(,)=();(()()){;}(()()){;}?[]:([],);}}}=();// we could try to calculate the order thusly:
// https://crypto.stackexchange.com/a/27914/4520
// https://en.wikipedia.org/wiki/Schoof%E2%80%93Elkies%E2%80%93Atkin_algorithm
(!){();}=();=[]();=[]();(){/*
             * valid versions are:
             *
             * ecdpVer1:
             *   - neither the curve or the base point are generated verifiably randomly.
             * ecdpVer2:
             *   - curve and base point are generated verifiably at random and curve.seed is present
             * ecdpVer3: 
             *   - base point is generated verifiably at random but curve is not. curve.seed is present
             */// other (optional) parameters can be calculated using the methods discused at
// https://crypto.stackexchange.com/q/28947/4520
=[,[,()],[()(),()()],..,];?[]:([],);}(){=();=();=();();// the last parameter should always be 0
//rsort($modulo);
(){:=;=([]);;:=;// these should be in strictly ascending order (hence the commented out rsort above)
=[([]),([]),([])];=(,);=();}=([(),,],);=();=(()(),);(!()){=;}=(()(),);(!()){=;}=[,[,],[,],..,];?[]:([],);}();}/**
     * Use Specified Curve
     *
     * A specified curve has all the coefficients, the base points, etc, explicitely included.
     * A specified curve is a more verbose way of representing a curve
     */(){=;}/**
     * Use Named Curve
     *
     * A named curve does not include any parameters. It is up to the EC parameters to
     * know what the coefficients, the base points, etc, are from the name of the curve.
     * A named curve is a more concise way of representing a curve
     */(){=;}}