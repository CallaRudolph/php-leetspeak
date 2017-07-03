<?php

    require_once "src/LeetspeakGenerator.php";

    class LeetspeakGeneratorTest extends PHPUnit_Framework_TestCase
    {

        function test_letterE()
        {
            $test_LeetspeakGenerator = new LeetspeakGenerator;
            $input = "e";

            $result = $test_LeetspeakGenerator->generateLeetspeakArray($input);

            $this->assertEquals(["3"], $result);
        }
    }
?>
