<?php
//require_once 'PHPUnit/Framework.php';



class TestSuite_Rest_AllTests extends Test_SuiteBase
{
    public static function suite() {
        $suite = new TestSuite_Rest_AllTests('RestTests');

        $tests = array('TestSuite_Rest_AssetTest', 'TestSuite_Rest_ObjectTest','TestSuite_Rest_DocumentTest');
//        $tests = array('TestSuite_Rest_ClassTest');

        $success = shuffle($tests);
        print("Created the following execution order:\n");

        foreach ($tests as $test) {
            print("    - " . $test . "\n");
            $suite->addTestSuite($test);
        }

        return $suite;
    }
}
?>