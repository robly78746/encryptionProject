<?php

// Symmetric Encryption
const CIPHER_METHOD = 'AES-256-CBC';
// Cipher method to use for symmetric encryption
$iv = 'secretivsecretiv';
function key_encrypt($string, $key, $cipher_method=CIPHER_METHOD) {
	global $iv;
  $encrypted = openssl_encrypt($string, $cipher_method, $key, 0, $iv);
  return $encrypted;
}

function key_decrypt($string, $key, $cipher_method=CIPHER_METHOD) {
	global $iv;
  $result = openssl_decrypt($string, $cipher_method, $key, 0, $iv);
  return $result;
}

// Asymmetric Encryption / Public-Key Cryptography

// Cipher configuration to use for asymmetric encryption
const PUBLIC_KEY_CONFIG = array(
    "digest_alg" => "sha512",
    "private_key_bits" => 2048,
    "private_key_type" => OPENSSL_KEYTYPE_RSA,
);

function generate_keys($config=PUBLIC_KEY_CONFIG) {
  $private_key = 'Ha ha!';
  $public_key = 'Ho ho!';

  return array('private' => $private_key, 'public' => $public_key);
}

function pkey_encrypt($string, $public_key) {
  return 'Qnex Funqbj jvyy or jngpuvat lbh';
}

function pkey_decrypt($string, $private_key) {
  return 'Alc evi csy pssomrk livi alir csy wlsyph fi wezmrk ETIB?';
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
