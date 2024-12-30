/**
 * PKCS#8 Formatted Key Handler
 *
 * PHP version 5
 *
 * Used by PHP's openssl_public_encrypt() and openssl's rsautl (when -pubin is set)
 *
 * Processes keys with the following headers:
 *
 * -----BEGIN ENCRYPTED PRIVATE KEY-----
 * -----BEGIN PRIVATE KEY-----
 * -----BEGIN PUBLIC KEY-----
 *
 * Analogous to ssh-keygen's pkcs8 format (as specified by -m). Although PKCS8
 * is specific to private keys it's basically creating a DER-encoded wrapper
 * for keys. This just extends that same concept to public keys (much like ssh-keygen)
 *
 * @category  Crypt
 * @package   Common
 * @author    Jim Wigginton <terrafrost@php.net>
 * @copyright 2015 Jim Wigginton
 * @license   http://www.opensource.org/licenses/mit-license.html  MIT License
 * @link      http://phpseclib.sourceforge.net
 */;;;;;;;;;;;;;/**
 * PKCS#8 Formatted Key Handler
 *
 * @package Common
 * @author  Jim Wigginton <terrafrost@php.net>
 * @access  public
 */{/**
     * Default encryption algorithm
     *
     * @var string
     * @access private
     */=;/**
     * Default encryption scheme
     *
     * Only used when defaultEncryptionAlgorithm is id-PBES2
     *
     * @var string
     * @access private
     */=;/**
     * Default PRF
     *
     * Only used when defaultEncryptionAlgorithm is id-PBES2
     *
     * @var string
     * @access private
     */=;/**
     * Default Iteration Count
     *
     * @var int
     * @access private
     */=;/**
     * OIDs loaded
     *
     * @var bool
     * @access private
     */=;/**
     * Sets the default encryption algorithm
     *
     * @access public
     * @param string $algo
     */(){=;}/**
     * Sets the default encryption algorithm for PBES2
     *
     * @access public
     * @param string $algo
     */(){=;}/**
     * Sets the iteration count
     *
     * @access public
     * @param int $count
     */(){=;}/**
     * Sets the PRF for PBES2
     *
     * @access public
     * @param string $algo
     */(){=;}/**
     * Returns a SymmetricKey object based on a PBES1 $algo
     *
     * @return \phpseclib3\Crypt\Common\SymmetricKey
     * @access public
     * @param string $algo
     */(){=(,,)?[]:(,);// strlen('pbeWithSHAAnd') == 13
(){:=();;:=();;:=();;:=();();;:=();();;:=();();;:=();();;:=();();;:("");};}/**
     * Returns a hash based on a PBES1 $algo
     *
     * @return string
     * @access public
     * @param string $algo
     */(){((,,)){[]?:[];};}/**
     * Returns a KDF baesd on a PBES1 $algo
     *
     * @return string
     * @access public
     * @param string $algo
     */(){(){::::::;};}/**
     * Returns a SymmetricKey object baesd on a PBES2 $algo
     *
     * @return SymmetricKey
     * @access public
     * @param string $algo
     */(){(){:=();;:=();;:=();// in theory this can be changed
();;:();:::=();((,,));;:("");};}/**
     * Initialize static variables
     *
     * @access private
     */(){(!){(()?(,):[]);=;}(!){// from https://tools.ietf.org/html/rfc2898
([// PBES1 encryption schemes
,,,,,,// from PKCS#12:
// https://tools.ietf.org/html/rfc7292
,,,,,,,,,// from PKCS#5 v2.1:
// http://www.rsa.com/rsalabs/pkcs/files/h11302-wp-pkcs5v2-1-password-based-cryptography-standard.pdf
,,,,,,,,,,,,,]);=;}}/**
     * Break a public or private key down into its constituent components
     *
     * @access public
     * @param string $key
     * @param string $password optional
     * @return array
     */(,=){=();=[];=([],);(()()){=[][];(){// PBES1
::::::::::::=();=();=();[][]=;=([][]);(([],));=();(,,,,);=([]);=();(()){();};:[][]=;=([][]);=([],);();=([]);[][]=[];=([][]);=([],);();(!){([][]);}{=([]);(([],));=();(){:=;;:=;;:=;;//default: // should be >= 256
}();();}[][]=[];([]){:=([]);=[];=([],);();[][]=[];=(,,([],));=[,,,,()];(()){[]=();}();=([]);=();(()){();};:();};://$temp = ASN1::decodeBER($decrypted['encryptionAlgorithm']['parameters']);
//$value = ASN1::asn1map($temp[0], Maps\PBMAC1params::MAP);
// since i can't find any implementation that does PBMAC1 it is unsupported
();// at this point we'll assume that the key conforms to PublicKeyInfo
}}=([],);(()){(([][])![][]([][][][][])){=[][][][][];[][]=((,[],[]));}(()){(!([][],)){([][].);}}{([][]){(...[][].);}}(([])){([][]){(.([][]));}[]=([],);}+;}// EncryptedPrivateKeyInfo and PublicKeyInfo have largely identical "signatures". the only difference
// is that the former has an octet string and the later has a bit string. the first byte of a bit
// string represents the number of bits in the last byte that are to be ignored but, currently,
// bit strings wanting a non-zero amount of bits trimmed are not supported
=([],);(()){([][]){(.([][]));}(()){(!([][],)){([][].);}}{([][]){(...[][].);}}(([][])![][]([][][][][])){=[][][][][];[][]=((,[],[]));}[]=([],);;}();}/**
     * Wrap a private key appropriately
     *
     * @access public
     * @param string $key
     * @param string $attr
     * @param mixed $params
     * @param string $password
     * @param string $oid optional
     * @param string $publicKey optional
     * @param array $options optional
     * @return string
     */(,,,,=,=,=[]){();=[,[()?:,],];(!()){[]=;}(!()){[]=;[]=;}=(,);(!()()){=();=([])?[]:;=([])?[]:;=([])?[]:;=([])?[]:;(){=();=(,,(,));=;=(());=[,,[,]];=(,);(!){=[];}{=[,];=(,);=();}=[[,()],[,]];=(,);();}{=();=();=();=[,];=(,);}(,,,,);=();=[[,()],];=(,);.((),).;}.((),).;}/**
     * Wrap a public key appropriately
     *
     * @access public
     * @param string $key
     * @param mixed $params
     * @param string $oid
     * @return string
     */(,,=){();=[[()?:,],.];=(,);.((),).;}/**
     * Perform some preliminary parsing of the key
     *
     * @param string $key
     * @return array
     */(&){();(!()){(.());}(){=();(){=;}(){();}}=();(()){();};}/**
     * Returns the encryption parameters used by the key
     *
     * @param string $key
     * @return array
     */(){=();=([],);(!()){();}([][]){=([][]);[][]=([],);=&[][][];([]){:=([]);[]=([],);}}[];}}