<?php
require_once 'solution.php';

$screen1 = new Screen('Samsung', 723, 'S24F350FH', 'PLS', 24);
$screen2 = new Screen('Samsung', 620, 'S22F350FH', 'TN', 21.5);
$screen3 = new Screen('Philips', 1517, '273V5LHAB', 'TFT', 27);
$screen4 = new Screen('Samsung', 2074, 'C27F591FD', 'VA', 27);

$mouse1 = new Mouse('Microsoft', 129, 'Mobile Mouse 1850', false);
$mouse2 = new Mouse('LogiTech', 799, 'MX Master', false);
$mouse3 = new Mouse('LogiTech', 128, 'M185', true);
$mouse4 = new Mouse('HP', 99, 'X3000 H2C22AA', false);

$keyboard1 = new Keyboard('Microsoft', 325, 'Natural Ergonomic 4000', true);
$keyboard2 = new Keyboard('Logitech', 285, 'G105', true);
$keyboard3 = new Keyboard('RAPOO', 189, 'E6100', false);
$keyboard4 = new Keyboard('Corsair', 799, 'K95', true);

$computer1 = new Computer(
    'GIGABYTE', 
    3059, 
    '',
    'GA-Z170-HD3', 
    'INTEL I7-6700', 
    'WD1TB', 
    '8GB DDR4 Hyper-X', 
    'Intel® HD Graphics 530'
);
$computer2 = new Computer(
    'AMD', 
    2418, 
    '',
    'ASUS A88XM-A/USB3.1', 
    'AMD A-Series Quad Core A10-7870K 3.9GHz', 
    'SanDisk SSD Plus 240GB', 
    'Kingston 8GB DDR3 1600MHz', 
    'AMD Radeon R7 Graphics'
);
$computer3 = new Computer(
    'Intel', 
    1580, 
    '',
    '', 
    'Intel Core i3-7100 3.9Ghz', 
    '500GB 7200RPM', 
    '4GB DDR4 2100Mhz',
    'Intel Skylake GT2 HD Graphics 630'
);

$pur1 = new purchase($screen1, $mouse1, $keyboard1, $computer1);
$pur2 = new purchase($screen4, $mouse3, $keyboard1, $computer3);
$pur3 = new purchase($screen3, $mouse2, $keyboard4, $computer1);
$pur4 = new purchase($screen2, $mouse1, $keyboard2, $computer2);

echo $pur1->getFullPurchaseDetails();
echo $pur2->getFullPurchaseDetails();
echo $pur3->getFullPurchaseDetails();
echo $pur4->getFullPurchaseDetails();

/* Screen manufacturer: Samsung, model: S24F350FH, Price: 723
    Mouse manufacturer: Microsoft, model: Mobile Mouse 1850, Price: 129
    Keyboard manufacturer: Microsoft, Price: 325
    Computer manufacturer: GIGABYTE, model: , Price: 3059
    
    Screen manufacturer: Samsung, model: C27F591FD, Price: 2074<br>Mouse manufacturer: LogiTech, model: M185, Price: 128<br>Keyboard manufacturer: Microsoft, Price: 325<br>Computer manufacturer: Intel, model: , Price: 1580<br><br>Screen manufacturer: Philips, model: 273V5LHAB, Price: 1517<br>Mouse manufacturer: LogiTech, model: MX Master, Price: 799<br>Keyboard manufacturer: Corsair, Price: 799<br>Computer manufacturer: GIGABYTE, model: , Price: 3059<br><br>Screen manufacturer: Samsung, model: S22F350FH, Price: 620<br>Mouse manufacturer: Microsoft, model: Mobile Mouse 1850, Price: 129<br>Keyboard manufacturer: Logitech, Price: 285<br>Computer manufacturer: AMD, model: , Price: 2418<br><br>

*/
?>