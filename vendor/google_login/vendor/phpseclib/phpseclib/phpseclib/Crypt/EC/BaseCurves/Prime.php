/**
 * Curves over y^2 = x^3 + a*x + b
 *
 * These are curves used in SEC 2 over prime fields: http://www.secg.org/SEC2-Ver-1.0.pdf
 * The curve is a weierstrass curve with a[1], a[3] and a[2] set to 0.
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
 */;;;;;;/**
 * Curves over y^2 = x^3 + a*x + b
 *
 * @package Prime
 * @author  Jim Wigginton <terrafrost@php.net>
 * @access  public
 */{/**
     * Prime Field Integer factory
     *
     * @var \phpseclib3\Math\PrimeFields
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
     * The number two over the specified finite field
     *
     * @var object
     */;/**
     * The number three over the specified finite field
     *
     * @var object
     */;/**
     * The number four over the specified finite field
     *
     * @var object
     */;/**
     * The number eight over the specified finite field
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
     */(){=;=();=(());=(());// used by jacobian coordinates
=(());=(());=(());}/**
     * Set coefficients a and b
     */(,){(!()){();}=();=();}/**
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
     * Adds two "fresh" jacobian form on the curve
     *
     * @return FiniteField[]
     */(,){(,)=;(,)=;(()){(!()){[];}{();}}=();=();=();=();=();=()()(());=(())(());[,,];}/**
     * Adds one "fresh" jacobian form on the curve
     *
     * The second parameter should be the "fresh" one
     *
     * @return FiniteField[]
     */(,){(,,)=;(,)=;=();=();=(());(()){(!()){[];}{();}}=();=();=();=();=();=()()(());=(())(());=();[,,];}/**
     * Adds two jacobian coordinates on the curve
     *
     * @return FiniteField[]
     */(,){(,,)=;(,,)=;=();=();=();=();=(());=(());(()){(!()){[];}{();}}=();=();=();=();=();=()()(());=(())(());=()();[,,];}/**
     * Adds two points on the curve
     *
     * @return FiniteField[]
     */(,){(!()){();}(!()!()){(()){;}(()){;}[];}// use jacobian coordinates
(([])([])){(([])([])){(,);}(([])){(,);}(([])){(,);}(,);}(([])([])){();}([]([])){(![]([])){[];}{// eg. doublePoint
(,)=();}}{=[]([]);=[]([]);}=();=()([])([]);=([]())([]);[,];}/**
     * Returns the numerator and denominator of the slope
     *
     * @return FiniteField[]
     */(){=([])([])();=([]);[,];}/**
     * Doubles a jacobian coordinate on the curve
     *
     * @return FiniteField[]
     */(){(,,)=;=();=();=();=()();=();=(());=();=()(());=(())((()));=()();[,,];}/**
     * Doubles a "fresh" jacobian coordinate on the curve
     *
     * @return FiniteField[]
     */(){(,)=;=();=();=()();=();=();=()(());=(())((()));=();[,,];}/**
     * Doubles a point on a curve
     *
     * @return FiniteField[]
     */(){(!()){();}(!()){[];}// use jacobian coordinates
(([])){(([])){();}();}(,)=();=();=()([])([]);=([]())([]);[,];}/**
     * Returns the X coordinate and the derived Y coordinate
     *
     * @return array
     */(){=(());=(,);=();(){:=;;:=;;:();}=();=()()();=();=();(!){();}=();=?:();[,];}/**
     * Tests whether or not the x / y values satisfy the equation
     *
     * @return boolean
     */(){(,)=;=();=();=()()();=();();}/**
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
     * Multiply and Add Points
     *
     * Adapted from https://git.io/vxPUH
     *
     * @return int[]
     */(,){=();(&){=();}=[([],)];=[([][])?[][]:];(=;<;){[]=([],);[]=([][])?[][]:;}=[];// comb all window NAFs
=;(=-;;){=-;=;([][]){[]=[]([]);[]=[]([]);=(([]),([]),);;}=[[],// 1
,// 3
,// 5
[]// 7
];[]=([],[]);[]=([],([]));=[-,/* -1 -1 */-,/* -1  0 */-,/* -1  1 */-,/*  0 -1 */,/*  0 -1 */,/*  0  1 */,/*  1 -1 */,/*  1  0 *//*  1  1 */];=([],[]);=(([]),);(>){[]=(,,);[]=(,,);}{[]=[];[]=[];}(=;<;){=([][])?[][]:;=([][])?[][]:;[][]=[*(+)++];[][]=;[]=;}}=[];=[,,,];(=;;){=;(){=;(=;<;){[]=([][])?[][]:;([]){=;}}(!){;};;}(){;}(){=();}(<){;}(=;<;){=[];=;(){;}=>?[][(-)]:([][(--)]);=(,);}}();}/**
     * Precomputes NAF points
     *
     * Adapted from https://git.io/vxY1f
     *
     * @return int[]
     */(,){(([])){[];}=[];=()-;=?:();(=;<;){[]=([-],);}[]=;/*
        $str = '';
        foreach ($res as $re) {
            $re[0] = bin2hex($re[0]->toBytes());
            $re[1] = bin2hex($re[1]->toBytes());
            $str.= "            ['$re[0]', '$re[1]'],\r\n";
        }
        file_put_contents('temp.txt', $str);
        exit;
        */;}/**
     * Precomputes points in Joint Sparse Form
     *
     * Adapted from https://git.io/vxrpD
     *
     * @return int[]
     */(,){;(!()){=();}=[[],[]];=();=();=;=;(((-))>((-))>){// first phase
=()+*();;;=()+*();;;(){=-;}(){=-;}=;(&){// if $m14 is odd
=()+*()+*();;;=()?-:;}[][]=;=;(&){// if $m24 is odd
=()+*()+*();;;=()?-:;}[][]=;// second phase
(*+){=-;}(*+){=-;}=();=();};}/**
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