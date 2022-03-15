<?php

use PHPUnit\Framework\TestCase;

require_once "JajarGenjang.php";

class JajarGenjangTest extends TestCase
{

    public static function setUpBeforeClass(): void
    {
        echo "Eksekusi sebleum pengjujian \n";
    }

    public function testHitungkeliling()
    {
        $JajarGenjang = new JajarGenjang(4,2);
        
        $result = $JajarGenjang->hitungKeliling();
        $expected = 12;

        $this->assertEquals($expected, $result); 
    }

    public function testHitungkelilingKosong()
    {
        $JajarGenjang = new JajarGenjang("","");

        $result = $JajarGenjang->hitungKeliling();
        $expected = "Tidak Boleh kosong!";

        $this->assertEquals($expected, $result); 
    }

    public function testHitungLuas()
    {
        $JajarGenjang = new JajarGenjang(4,2);
        
        $result = $JajarGenjang->hitungLuas();
        $expected = 8;

        $this->assertEquals($expected, $result); 
    }

    public function testHitungLuasKosong()
    {
        $JajarGenjang = new JajarGenjang("","");

        $result = $JajarGenjang->hitungLuas();
        $expected = "Tidak Boleh kosong!";

        $this->assertEquals($expected, $result); 
    }

    public static function tearDownAfterClass(): void
    {
        echo "\nEksekusi setelah pengjujian \n";
    }

}