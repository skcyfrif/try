/**
 * PHP Montgomery Modular Exponentiation Engine
 *
 * PHP version 5 and 7
 *
 * @category  Math
 * @package   BigInteger
 * @author    Jim Wigginton <terrafrost@php.net>
 * @copyright 2017 Jim Wigginton
 * @license   http://www.opensource.org/licenses/mit-license.html  MIT License
 * @link      http://pear.php.net/package/Math_BigInteger
 */;;/**
 * PHP Montgomery Modular Exponentiation Engine
 *
 * @package PHP
 * @author  Jim Wigginton <terrafrost@php.net>
 * @access  public
 */{/**
     * Prepare a number for use in Montgomery Modular Reductions
     *
     * @param array $x
     * @param array $n
     * @param string $class
     * @return array
     */(,,){=();=((,()),);=();=;(,)=();;}/**
     * Montgomery Multiply
     *
     * Interleaves the montgomery reduction and long multiplication algorithms together as described in
     * {@link http://www.cacr.math.uwaterloo.ca/hac/about/chap14.pdf#page=13 HAC 14.36}
     *
     * @param array $x
     * @param array $n
     * @param string $class
     * @return array
     */(,,){=[[],[]];((=(,[]))){=([]);[][]=;[][]=(,);}=();=[];(=;<;){=[][]*[][];=-*(?(/):());=([],);=((,),);=([],,,);}[]=([],);((,,,)){=([],,,);}[];}/**
     * Modular Inverse of a number mod 2**26 (eg. 67108864)
     *
     * Based off of the bnpInvDigit function implemented and justified in the following URL:
     *
     * {@link http://www-cs-students.stanford.edu/~tjw/jsbn/jsbn.js}
     *
     * The following URL provides more info:
     *
     * {@link http://groups.google.com/group/sci.crypt/msg/7a137205c1be7d85}
     *
     * As for why we do all the bitmasking...  strange things can happen when converting from floats to ints. For
     * instance, on some computers, var_dump((int) -4294967297) yields int(-1) and on others, it yields
     * int(-2147483648).  To avoid problems stemming from this, we use bitmasks to guarantee that ints aren't
     * auto-converted to floats.  The outermost bitmask is present because without it, there's no guarantee that
     * the "residue" returned would be the so-called "common residue".  We use fmod, in the last step, because the
     * maximum possible $x is 26 bits and the maximum $result is 16 bits.  Thus, we have to be able to handle up to
     * 40 bits, which only 64-bit floating points will support.
     *
     * Thanks to Pedro Gimeno Fortea for input!
     *
     * @param array $x
     * @param string $class
     * @return int
     */(,)// 2**26 == 67,108,864
{=-[];=&;// x**-1 mod 2**2
=(*(-*))&;// x**-1 mod 2**4
=(*(-(&)*))&;// x**-1 mod 2**8
=(*((-(&)*)&))&;// x**-1 mod 2**16
=?(*(-(*,)),):// x**-1 mod 2**26
(*(-(*)%))%;&;}}