<?php

require_once '../vendor/autoload.php';
use Spatie\SslCertificate\SslCertificate;

$certificate = SslCertificate::createForHostName('usaapps-uat.justice.gov');

echo $certificate->getIssuer() . "\n"; // returns "Let's Encrypt Authority X3"
echo $certificate->expirationDate() . "\n"; // returns an instance of Carbon
echo $certificate->expirationDate()->diffInDays() . "\n"; // returns an int
echo $certificate->getDomain() . "\n"; // 
print_r($certificate->getDomains()); // 
