<h1>Weclome to Shipping Page</h1>

<?php

//CREATE AN ARRAY OF ADDRESSES (MAX 5)
$addresses = array(
    '0' => array(
        'firm_name' => 'Prasanth',
        'address1' => 'Suite 511. Block F.',
        'address2' => 'Phileo Damansara 1',
        'city' => 'Petaling Jaya',
        'state' => 'Selangor',
        'zip5' => '46350',
        'zip4' => '52100'
    )
);

//RUN ADDRESS STANDARDIZATION REQUEST
$verified_address = $this->usps->address_standardization($addresses);

//OUTPUT RESULTS
echo "<pre>";
print_r($verified_address);
echo "</pre>";




?>