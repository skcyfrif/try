/**
 * PHP Dynamic Barrett Modular Exponentiation Engine
 *
 * PHP version 5 and 7
 *
 * @category  Math
 * @package   BigInteger
 * @author    Jim Wigginton <terrafrost@php.net>
 * @copyright 2017 Jim Wigginton
 * @license   http://www.opensource.org/licenses/mit-license.html  MIT License
 * @link      http://pear.php.net/package/Math_BigInteger
 */;;;/**
 * PHP Dynamic Barrett Modular Exponentiation Engine
 *
 * @package PHP
 * @author  Jim Wigginton <terrafrost@php.net>
 * @access  public
 */{/**
     * Custom Reduction Function
     *
     * @see self::generateCustomReduction
     */;/**
     * Barrett Modular Reduction
     *
     * This calls a dynamically generated loop unrolled function that's specific to a given modulo.
     * Array lookups are avoided as are if statements testing for how many bits the host OS supports, etc.
     *
     * @param array $n
     * @param array $m
     * @param string $class
     * @return array
     */(,,){=;();}/**
     * Generate Custom Reduction
     *
     * @param PHP $m
     * @param string $class
     * @return callable
     */(,){(()){=;;}=();(<){=.....(,(,)).;(..);=;//self::$custom_reduction = \Closure::bind($func, $m, $class);
;}=();=&;=(,+());[]=;=();(,)=();(){=;}{=(,*);[]=;=();()=();=;}=;=;=()+(());=.(*())......(,(,)).....;();(,,,);(,,,);.(()-).;(,,,);();?.(()+).:.((())+).;(,,,);();/*
        if ($class::BASE == 26) {
            $code.= '$n = array_slice($n, 0, ' . (count($m) + 1) . ');
                     $temp2 = array_slice($temp2, 0, ' . (count($m) + 1) . ');';
        }
        */(,,,);=(,,,);;(,,);;(..);=;;//self::$custom_reduction = \Closure::bind($func, $m, $class);
}/**
     * Inline Trim
     *
     * Removes leading zeros
     *
     * @param string $name
     * @return string
     */(){......;}/**
     * Inline Multiply (unknown, known)
     *
     * @param string $input
     * @param array $arr
     * @param string $output
     * @param string $class
     * @return string
     */(,,,){(!()){;}=.......().;(=;<();){...[];?:;;?:;....;(){;}..;?:;}...().;;(=;<();){?:;.....[];?:;;?:;..;(){;}..;?:;}..;;//if (count($arr) < 2 * self::KARATSUBA_CUTOFF) {
//}
;}/**
     * Inline Addition
     *
     * @param string $x
     * @param string $y
     * @param string $result
     * @param string $class
     * @return string
     */(,,,){=.......................()..().;?....:....;.......()....().........;();;}/**
     * Inline Subtraction 2
     *
     * For when $known is more digits than $unknown. This is the harder use case to optimize for.
     *
     * @param string $known
     * @param string $unknown
     * @param string $result
     * @param string $class
     * @return string
     */(,,,){=.................().;?:;..;(){;}..;(){;}..................;();;}/**
     * Inline Subtraction 1
     *
     * For when $unknown is more digits than $known. This is the easier use case to optimize for.
     *
     * @param string $unknown
     * @param array $known
     * @param string $result
     * @param string $class
     * @return string
     */(,,,){=....;(=,=;<();,){..........;([]*+[]);(){;}.().;?:;....;(){;}..;(){;}....;}..;(()){.....[].......;}........;();;}/**
     * Inline Comparison
     *
     * If $unknown >= $known then loop
     *
     * @param array $known
     * @param string $unknown
     * @param string $subcode
     * @return string
     */(,,){=();=.....()....().;(=()-;;){.....[]........[]...;}........;;}/**
     * Convert a float to a string
     *
     * If you do echo floatval(pow(2, 52)) you'll get 4.6116860184274E+18. It /can/ be displayed without a loss of
     * precision but displayed in this way there will be precision loss, hence the need for this method.
     *
     * @param int|float $num
     * @return string
     */(){(!()){;}(<){.(());}=;(){=(,).;=(/);};}}