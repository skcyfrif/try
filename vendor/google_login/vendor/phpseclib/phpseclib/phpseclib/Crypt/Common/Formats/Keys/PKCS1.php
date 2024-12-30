/**
 * PKCS1 Formatted Key Handler
 *
 * PHP version 5
 *
 * @category  Crypt
 * @package   Common
 * @author    Jim Wigginton <terrafrost@php.net>
 * @copyright 2015 Jim Wigginton
 * @license   http://www.opensource.org/licenses/mit-license.html  MIT License
 * @link      http://phpseclib.sourceforge.net
 */;;;;;;;;;;/**
 * PKCS1 Formatted Key Handler
 *
 * @package RSA
 * @author  Jim Wigginton <terrafrost@php.net>
 * @access  public
 */{/**
     * Default encryption algorithm
     *
     * @var string
     * @access private
     */=;/**
     * Sets the default encryption algorithm
     *
     * @access public
     * @param string $algo
     */(){=;}/**
     * Returns the mode constant corresponding to the mode string
     *
     * @access public
     * @param string $mode
     * @return int
     * @throws \UnexpectedValueException if the block cipher mode is unsupported
     */(){(){:::::;}();}/**
     * Returns a cipher object corresponding to a string
     *
     * @access public
     * @param string $algo
     * @return string
     * @throws \UnexpectedValueException if the encryption algorithm is unsupported
     */(){=;(){("",,):=(([]));([]);;("",,):(([]));("",,):(([]));:(.);}}/**
     * Generate a symmetric key for PKCS#1 keys
     *
     * @access private
     * @param string $password
     * @param string $iv
     * @param int $length
     * @return string
     */(,,){=;=(,,);(()<){(..,);}(,,);}/**
     * Break a public or private key down into its constituent components
     *
     * @access public
     * @param string $key
     * @param string $password optional
     * @return array
     */(,){(!()){(.());}/* Although PKCS#1 proposes a format that public and private keys can use, encrypting them is
           "outside the scope" of PKCS#1.  PKCS#1 then refers you to PKCS#12 and PKCS#15 if you're wanting to
           protect private keys, however, that's not what OpenSSL* does.  OpenSSL protects private keys by adding
           two new "fields" to the key - DEK-Info and Proc-Type.  These fields are discussed here:

           http://tools.ietf.org/html/rfc1421#section-4.6.1.1
           http://tools.ietf.org/html/rfc1421#section-4.6.1.3

           DES-EDE3-CBC as an algorithm, however, is not discussed anywhere, near as I can tell.
           DES-CBC and DES-EDE are discussed in RFC1423, however, DES-EDE3-CBC isn't, nor is its key derivation
           function.  As is, the definitive authority on this encoding scheme isn't the IETF but rather OpenSSL's
           own implementation.  ie. the implementation *is* the standard and any bugs that may exist in that
           implementation are part of the standard, as well.

           * OpenSSL is the de facto standard.  It's utilized by OpenSSH and other projects */((,,)){=(([]));// remove the Proc-Type / DEK-Info sections as they're no longer needed
=(,,);=();(){=;}=([]);((,,()));();=();}{(){=();(){=;}(){();}}};}/**
     * Wrap a private key appropriately
     *
     * @access public
     * @param string $key
     * @param string $type
     * @param string $password
     * @param array $options optional
     * @return string
     */(,,,=[]){(()!()){"".((),)."";}=([])?[]:;=();=(());((,,()));();=(());""....""..((()),)."";}/**
     * Wrap a public key appropriately
     *
     * @access public
     * @param string $key
     * @param string $type
     * @return string
     */(,){"".((),)."";}}