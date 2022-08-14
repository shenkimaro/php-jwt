<?php

namespace Firebase\JWT;

/**
 * Helped Class 
 *
 * @author ibanez
 */
class SupportedAlgorithms {
	/**
	 * openssl SHA384
	 */
	public const ES384 = 'ES384';
	/**
	 * openssl SHA256
	 */
	public const ES256 = 'ES256';
	/**
	 * hash_hmac SHA256
	 */
	public const HS256 = 'HS256';
	/**
	 * hash_hmac SHA384
	 */
	public const HS384 = 'HS384';
	/**
	 * hash_hmac SHA512
	 */
	public const HS512 = 'HS512';
	/**
	 * openssl SHA256
	 */
	public const RS256 = 'RS256';
	/**
	 * openssl SHA384
	 */
	public const RS384 = 'RS384';
	/**
	 * openssl SHA512
	 */
	public const RS512 = 'RS512';
	/**
	 * sodium_crypto EdDSA
	 */
	public const EdDSA = 'EdDSA';
}
