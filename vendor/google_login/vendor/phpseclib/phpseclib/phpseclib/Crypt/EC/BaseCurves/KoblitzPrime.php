/**
 * Generalized Koblitz Curves over y^2 = x^3 + b.
 *
 * According to http://www.secg.org/SEC2-Ver-1.0.pdf Koblitz curves are over the GF(2**m)
 * finite field. Both the $a$ and $b$ coefficients are either 0 or 1. However, SEC2
 * generalizes the definition to include curves over GF(P) "which possess an efficiently
 * computable endomorphism".
 *
 * For these generalized Koblitz curves $b$ doesn't have to be 0 or 1. Whether or not $a$
 * has any restrictions on it is unclear, however, for all the GF(P) Koblitz curves defined
 * in SEC2 v1.0 $a$ is $0$ so all of the methods defined herein will assume that it is.
 *
 * I suppose we could rename the $b$ coefficient to $a$, however, the documentation refers
 * to $b$ so we'll just keep it.
 *
 * If a later version of SEC2 comes out wherein some $a$ values are non-zero we can create a
 * new method for those. eg. KoblitzA1Prime.php or something.
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
 * Curves over y^2 = x^3 + b
 *
 * @package KoblitzPrime
 * @author  Jim Wigginton <terrafrost@php.net>
 * @access  public
 */{// don't overwrite setCoefficients() with one that only accepts one parameter so that
// one might be able to switch between KoblitzPrime and Prime more easily (for benchmarking
// purposes).
/**
     * Multiply and Add Points
     *
     * Uses a efficiently computable endomorphism to achieve a slight speedup
     *
     * Adapted from https://git.io/vxbrP
     *
     * @return int[]
     */(,){,,;(!()){=();=();}(!()){// get roots
=()();=()()();=[(),()];=[]([])<?[]:[];//echo strtoupper($this->beta->toHex(true)) . "\n"; exit;
}(!()){=();=();=();=(());=()();=()()();=[(),()];=(,[])[];=[]();=()?[]:[];=((),);///*
(){([]()).;([]()).;};//*/
}==[];(=;<();){=[];=[]();// begin split
(,)=;=[]();(,)=();((())){=();}=[]()();(,)=();((())){=();}=([]);=([]);=([]);=([]);=()();=()();// end split
=[[](),[],];(([])){[]=((){[[](),[],];},[]);[]=[];}(()){=();=();}(()){=();=();}=*;[]=;[]=();;[]=;[]=();}(,);}/**
     * Returns the numerator and denominator of the slope
     *
     * @return FiniteField[]
     */(){=([])([]);=([]);[,];}/**
     * Doubles a jacobian coordinate on the curve
     *
     * See http://hyperelliptic.org/EFD/g1p/auto-shortw-jacobian-0.html#doubling-dbl-2009-l
     *
     * @return FiniteField[]
     */(){(,,)=;=();=();=();=();=()()()();=();=();=(());=(())(());=()();[,,];}/**
     * Doubles a "fresh" jacobian coordinate on the curve
     *
     * See http://hyperelliptic.org/EFD/g1p/auto-shortw-jacobian-0.html#doubling-mdbl-2007-bl
     *
     * @return FiniteField[]
     */(){(,)=;=();=();=();=();=()()()();=();=()(());=;=();=()(());=();[,,];}/**
     * Tests whether or not the x / y values satisfy the equation
     *
     * @return boolean
     */(){(,)=;=();=()();=();();}/**
     * Calculates the parameters needed from the Euclidean algorithm as discussed at
     * http://diamond.boisestate.edu/~liljanab/MATH308/GuideToECC.pdf#page=148
     *
     * @param BigInteger $u
     * @param BigInteger $v
     * @return BigInteger[]
     */(,){=();=();=;=;=;=;=(());=;=;=;=;=;(!()){()=();=;=;=(());=;=;=(());=;=;=(());(()>){=;=;}{;}(){=;=();}(){=()(());=()(());(()){=;=();}{=;=();};}}[[,],[,]];}}