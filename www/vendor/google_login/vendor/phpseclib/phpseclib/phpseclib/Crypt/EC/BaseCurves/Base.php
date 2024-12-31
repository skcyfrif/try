/**
 * Curve methods common to all curves
 *
 * PHP version 5 and 7
 *
 * @category  Crypt
 * @package   EC
 * @author    Jim Wigginton <terrafrost@php.net>
 * @copyright 2017 Jim Wigginton
 * @license   http://www.opensource.org/licenses/mit-license.html  MIT License
 * @link      http://pear.php.net/package/Math_BigInteger
 */;;;/**
 * Base
 *
 * @package Prime
 * @author  Jim Wigginton <terrafrost@php.net>
 * @access  public
 */{/**
     * Doubles
     *
     * @var object[]
     */;/**
     * NAF Points
     *
     * @var int[]
     */;/**
     * The Order
     *
     * @var BigInteger
     */;/**
     * Finite Field Integer factory
     *
     * @var \phpseclib3\Math\FiniteField\Integer
     */;/**
     * Returns a random integer
     *
     * @return object
     */(){();}/**
     * Converts a BigInteger to a FiniteField integer
     *
     * @return object
     */(){();}/**
     * Returns the length, in bytes, of the modulo
     *
     * @return integer
     */(){();}/**
     * Returns the length, in bits, of the modulo
     *
     * @return integer
     */(){();}/**
     * Multiply a point on the curve by a scalar
     *
     * Uses the montgomery ladder technique as described here:
     *
     * https://en.wikipedia.org/wiki/Elliptic_curve_point_multiplication#Montgomery_ladder
     * https://github.com/phpecc/phpecc/issues/16#issuecomment-59176772
     *
     * @return array
     */(,){=([]);=?[[],]:[[],()];=();(=;<();){=[];[-]=([],[]);[]=([]);}?[]:([]);}/**
     * Creates a random scalar multiplier
     *
     * @return FiniteField
     */(){;(!()){=();}=(,());();}/**
     * Sets the Order
     */(){=;}/**
     * Returns the Order
     *
     * @return \phpseclib3\Math\BigInteger
     */(){;}/**
     * Use a custom defined modular reduction function
     *
     * @return object
     */(){();}/**
     * Returns the affine point
     *
     * @return object[]
     */(){;}/**
     * Converts an affine point to a jacobian coordinate
     *
     * @return object[]
     */(){;}/**
     * Negates a point
     *
     * @return object[]
     */(){=[[],[]()];(([])){[]=[];};}/**
     * Multiply and Add Points
     *
     * @return int[]
     */(,){=([]);=([]);=(,[]);=(,[]);=(,);();}}