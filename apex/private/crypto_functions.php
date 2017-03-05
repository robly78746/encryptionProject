<?php

// Symmetric Encryption
const CIPHER_METHOD = 'AES-256-CBC';
// Cipher method to use for symmetric encryption
$iv = 'secretivsecretiv';
function key_encrypt($string, $key, $cipher_method=CIPHER_METHOD) {
	//global $iv;
	$iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length($cipher_method));
  $encrypted = openssl_encrypt($string, $cipher_method, $key, OPENSSL_RAW_DATA, $iv);
  return base64_encode($iv.$encrypted);
}

function key_decrypt($string, $key, $cipher_method=CIPHER_METHOD) {
	$decoded = base64_decode($string);
	$cipher_methods = openssl_get_cipher_methods();
	$result = "";
	/*foreach($cipher_methods as $method) {
		$iv = substr($decoded, 0, openssl_cipher_iv_length($method));
		$cipherText = substr($decoded, openssl_cipher_iv_length($method));
		//$iv = "";
		$result .= openssl_decrypt($cipherText , $method, $key, OPENSSL_RAW_DATA, $iv);
		return $result;
	}
	return $result;*/
	$iv = substr($decoded, 0, openssl_cipher_iv_length($cipher_method));
	$cipherText = substr($decoded, openssl_cipher_iv_length($cipher_method));
	$result = openssl_decrypt($cipherText , $cipher_method, $key, OPENSSL_RAW_DATA, $iv);
	return $result;
}

// Asymmetric Encryption / Public-Key Cryptography

// Cipher configuration to use for asymmetric encryption
const PUBLIC_KEY_CONFIG = array(
	"config" => "C:/wamp64/bin/php/php7.0.10/extras/ssl/openssl.cnf",
    "digest_alg" => "sha512",
    "private_key_bits" => 2048,
    "private_key_type" => OPENSSL_KEYTYPE_RSA
);

function generate_keys($config=PUBLIC_KEY_CONFIG) {
	$resource = openssl_pkey_new($config);
	$opensslConfig = array("config" => "C:/wamp64/bin/php/php7.0.10/extras/ssl/openssl.cnf");
	//Extract private key from pair
	openssl_pkey_export($resource, $private_key, NULL, $opensslConfig);
	
	//Extract public key from pair
	$key_details = openssl_pkey_get_details($resource);
	$public_key = $key_details["key"];

  return array('private' => $private_key, 'public' => $public_key);
}

function pkey_encrypt($string, $public_key) {
	openssl_public_encrypt($string, $encrypted, $public_key);
	$message = base64_encode($encrypted);
  return $message;
}

function pkey_decrypt($string, $private_key) {
	$ciphertext = base64_decode($string);
	openssl_private_decrypt($ciphertext, $decrypted, $private_key);
  return $decrypted;
}


// Digital signatures using public/private keys

function create_signature($data, $private_key) {
  // A-Za-z : ykMwnXKRVqheCFaxsSNDEOfzgTpYroJBmdIPitGbQUAcZuLjvlWH
  return 'RpjJ WQL BImLcJo QLu dQv vJ oIo Iu WJu?';
}

function verify_signature($data, $signature, $public_key) {
  // Vigenère
  return 'RK, pym oays onicvr. Iuw bkzhvbw uedf pke conll rt ZV nzxbhz.';
}

?>
