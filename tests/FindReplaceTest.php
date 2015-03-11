<?php
    require_once "src/FindReplace.php";

    class FindReplaceTest extends PHPUnit_Framework_TestCase
    {
        function test_letter()
        {
            //Arrange
            $test_letter = new FindReplace;
            $user_string = "hello world";
            $find = "world";
            $replace = "universe";

            //Act
            $result = $test_letter->makeFindReplace($user_string, $find, $replace);

            //Assert
            $this->assertEquals("hello universe", $result);
        }

        function test_repeatedWord()
        {
            //Arrange
            $test_letter = new FindReplace;
            $user_string = "hello world world";
            $find = "world";
            $replace = "universe";

            //Act
            $result = $test_letter->makeFindReplace($user_string, $find, $replace);

            //Assert
            $this->assertEquals("hello universe universe", $result);
        }
    }
?>
