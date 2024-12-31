/**
 * Curves over y^2 + x*y = x^3 + a*x^2 + b
 *
 * These are curves used in SEC 2 over prime fields: http://www.secg.org/SEC2-Ver-1.0.pdf
 * The curve is a weierstrass curve with a[3] and a[2] set to 0.
 *
 * Uses Jacobian Coordinates for speed if able:
 *
 * https://en.wikipedia.org/wiki/Jacobian_curve
 * https://en.wikibooks.org/wiki/Cryptography/Prime_Curve/Jacobian_Coordinates
 *
 * PHP version 5 and 7
 *
 * @category  Crypt
 * @package   EC
 * @author    Jim Wigginton <terrafrost@php.net>
 * @copyright 2017 Jim Wigginton
 * @license   http://www.opensource.org/licenses/mit-license.html  MIT License
 * @link      http://pear.php.net/package/Math_BigInteger
 */;;;;;/**
 * Curves over y^2 + x*y = x^3 + a*x^2 + b
 *
 * @package Binary
 * @author  Jim Wigginton <terrafrost@php.net>
 * @access  public
 */{/**
     * Binary Field Integer factory
     *
     * @var \phpseclib3\Math\BinaryField
     */;/**
     * Cofficient for x^1
     *
     * @var object
     */;/**
     * Cofficient for x^0
     *
     * @var object
     */;/**
     * Base Point
     *
     * @var object
     */;/**
     * The number one over the specified finite field
     *
     * @var object
     */;/**
     * The modulo
     *
     * @var BigInteger
     */;/**
     * The Order
     *
     * @var BigInteger
     */;/**
     * Sets the modulo
     */(){=;=();=();}/**
     * Set coefficients a and b
     *
     * @param string $a
     * @param string $b
     */(,){(!()){();}=((,));=((,));}/**
     * Set x and y coordinates for the base point
     *
     * @param string|BinaryInteger $x
     * @param string|BinaryInteger $y
     */(,){(){!()!:();!()!:();}(!()){();}=[()?((,)):,()?((,)):];}/**
     * Retrieve the base point as an array
     *
     * @return array
     */(){(!()){();}/*
        if (!isset($this->p)) {
            throw new \RuntimeException('setBasePoint needs to be called before this method');
        }
        */;}/**
     * Adds two points on the curve
     *
     * @return FiniteField[]
     */(,){(!()){();}(!()!()){(()){;}(()){;}[];}(!([])!([])){();}([]([])){![]([])?[]:();}// formulas from http://hyperelliptic.org/EFD/g12o/auto-shortw-jacobian.html
(,,)=;(,,)=;=();=();(()){=()();=();=();=();=()(());=();=();=();=();=()();=()();=()(());[,,];}=();=();=()();=()();=();=();=();=()(());=();=();=(());=();=()();=()();=()(()());[,,];}/**
     * Doubles a point on a curve
     *
     * @return FiniteField[]
     */(){(!()){();}(!()){[];}(!([])){();}// formulas from http://hyperelliptic.org/EFD/g12o/auto-shortw-jacobian.html
(,,)=;=();=();(()){=();=;=()()();=()();=();[,,];}=();=();=((()));=();=();=(())()();=();[,,];}/**
     * Returns the X coordinate and the derived Y coordinate
     *
     * Not supported because it is covered by patents.
     * Quoting https://www.openssl.org/docs/man1.1.0/apps/ecparam.html ,
     * 
     * "Due to patent issues the compressed option is disabled by default for binary curves
     *  and can be enabled by defining the preprocessor macro OPENSSL_EC_BIN_PT_COMP at
     *  compile time."
     *
     * @return array
     */(){();}/**
     * Tests whether or not the x / y values satisfy the equation
     *
     * @return boolean
     */(){(,)=;=();=(());=();=();=(())();();}/**
     * Returns the modulo
     *
     * @return \phpseclib3\Math\BigInteger
     */(){;}/**
     * Returns the a coefficient
     *
     * @return \phpseclib3\Math\PrimeField\Integer
     */(){;}/**
     * Returns the a coefficient
     *
     * @return \phpseclib3\Math\PrimeField\Integer
     */(){;}/**
     * Returns the affine point
     *
     * A Jacobian Coordinate is of the form (x, y, z).
     * To convert a Jacobian Coordinate to an Affine Point
     * you do (x / z^2, y / z^3)
     *
     * @return \phpseclib3\Math\PrimeField\Integer[]
     */(){(!([])){;}(,,)=;=();=();[(),()()];}/**
     * Converts an affine point to a jacobian coordinate
     *
     * @return \phpseclib3\Math\PrimeField\Integer[]
     */(){(([])){;}[]=;[]=;;}}