/**
 * Curves over a*x^2 + y^2 = 1 + d*x^2*y^2
 *
 * http://www.secg.org/SEC2-Ver-1.0.pdf provides for curves with custom parameters.
 * ie. the coefficients can be arbitrary set through specially formatted keys, etc.
 * As such, Prime.php is built very generically and it's not able to take full
 * advantage of curves with 0 coefficients to produce simplified point doubling,
 * point addition. Twisted Edwards curves, in contrast, do not have a way, currently,
 * to customize them. As such, we can omit the super generic stuff from this class
 * and let the named curves (Ed25519 and Ed448) define their own custom tailored
 * point addition and point doubling methods.
 *
 * More info:
 *
 * https://en.wikipedia.org/wiki/Twisted_Edwards_curve
 *
 * PHP version 5 and 7
 *
 * @category  Crypt
 * @package   EC
 * @author    Jim Wigginton <terrafrost@php.net>
 * @copyright 2017 Jim Wigginton
 * @license   http://www.opensource.org/licenses/mit-license.html  MIT License
 * @link      http://pear.php.net/package/Math_BigInteger
 */;;;;/**
 * Curves over a*x^2 + y^2 = 1 + d*x^2*y^2
 *
 * @package Prime
 * @author  Jim Wigginton <terrafrost@php.net>
 * @access  public
 */{/**
     * The modulo
     *
     * @var BigInteger
     */;/**
     * Cofficient for x^2
     *
     * @var object
     */;/**
     * Cofficient for x^2*y^2
     *
     * @var object
     */;/**
     * Base Point
     *
     * @var object[]
     */;/**
     * The number zero over the specified finite field
     *
     * @var object
     */;/**
     * The number one over the specified finite field
     *
     * @var object
     */;/**
     * The number two over the specified finite field
     *
     * @var object
     */;/**
     * Sets the modulo
     */(){=;=();=(());=(());=(());}/**
     * Set coefficients a and b
     */(,){(!()){();}=();=();}/**
     * Set x and y coordinates for the base point
     */(,){(){!!:();!!:();}(!()){();}=[?():,?():];}/**
     * Returns the a coefficient
     *
     * @return \phpseclib3\Math\PrimeField\Integer
     */(){;}/**
     * Returns the a coefficient
     *
     * @return \phpseclib3\Math\PrimeField\Integer
     */(){;}/**
     * Retrieve the base point as an array
     *
     * @return array
     */(){(!()){();}/*
        if (!isset($this->p)) {
            throw new \RuntimeException('setBasePoint needs to be called before this method');
        }
        */;}/**
     * Returns the affine point
     *
     * @return \phpseclib3\Math\PrimeField\Integer[]
     */(){(!([])){;}(,,)=;=();[(),()];}/**
     * Returns the modulo
     *
     * @return \phpseclib3\Math\BigInteger
     */(){;}/**
     * Tests whether or not the x / y values satisfy the equation
     *
     * @return boolean
     */(){(,)=;=();=();=()();=()()();();}}