/**
 * Curves over y^2 = x^3 + a*x + x
 *
 * Technically, a Montgomery curve has a coefficient for y^2 but for Curve25519 and Curve448 that
 * coefficient is 1.
 *
 * Curve25519 and Curve448 do not make use of the y coordinate, which makes it unsuitable for use
 * with ECDSA / EdDSA. A few other differences between Curve25519 and Ed25519 are discussed at
 * https://crypto.stackexchange.com/a/43058/4520
 *
 * More info:
 *
 * https://en.wikipedia.org/wiki/Montgomery_curve
 *
 * PHP version 5 and 7
 *
 * @category  Crypt
 * @package   EC
 * @author    Jim Wigginton <terrafrost@php.net>
 * @copyright 2019 Jim Wigginton
 * @license   http://www.opensource.org/licenses/mit-license.html  MIT License
 * @link      http://pear.php.net/package/Math_BigInteger
 */;;;;;;;/**
 * Curves over y^2 = x^3 + a*x + x
 *
 * @package EC
 * @author  Jim Wigginton <terrafrost@php.net>
 * @access  public
 */{/**
     * Prime Field Integer factory
     *
     * @var \phpseclib3\Math\PrimeField
     */;/**
     * Cofficient for x
     *
     * @var object
     */;/**
     * Constant used for point doubling
     *
     * @var object
     */;/**
     * The Number Zero
     *
     * @var object
     */;/**
     * The Number One
     *
     * @var object
     */;/**
     * Base Point
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
     */(){=;=();=(());=(());}/**
     * Set coefficients a
     */(){(!()){();}=();=(());=(());=()();}/**
     * Set x and y coordinates for the base point
     *
     * @param BigInteger|PrimeInteger $x
     * @param BigInteger|PrimeInteger $y
     * @return PrimeInteger[]
     */(,){(){!!:();!!:();}(!()){();}=[?():,?():];}/**
     * Retrieve the base point as an array
     *
     * @return array
     */(){(!()){();}/*
        if (!isset($this->p)) {
            throw new \RuntimeException('setBasePoint needs to be called before this method');
        }
        */;}/**
     * Doubles and adds a point on a curve
     *
     * See https://tools.ietf.org/html/draft-ietf-tls-curve25519-01#appendix-A.1.3
     *
     * @return FiniteField[][]
     */(,,){(!()){();}(!()!()){[];}(!([])){();}(,)=;(,)=;=();=();=();=();=();=();=();=();=();=();=();=();=(());=();=?:;=((()));[[,],[,]];}/**
     * Multiply a point on the curve by a scalar
     *
     * Uses the montgomery ladder technique as described here:
     *
     * https://en.wikipedia.org/wiki/Elliptic_curve_point_multiplication#Montgomery_ladder
     * https://github.com/phpecc/phpecc/issues/16#issuecomment-59176772
     *
     * @return array
     */(,){=[,];=([]);=();=[];=();=(,,,);(=;<();){=[];(){(,)=(,,);}{(,)=(,,);}}?:();}/**
     * Converts an affine point to an XZ coordinate
     *
     * From https://hyperelliptic.org/EFD/g1p/auto-montgom-xz.html
     *
     * XZ coordinates represent x y as X Z satsfying the following equations:
     *
     *   x=X/Z
     *
     * @return \phpseclib3\Math\PrimeField\Integer[]
     */(){(()){[,];}(([])){;}[]=;;}/**
     * Returns the affine point
     *
     * @return \phpseclib3\Math\PrimeField\Integer[]
     */(){(!([])){;}(,)=;[()];}}