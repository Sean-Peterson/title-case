<?php

    require_once "src/TitleCaseGenerator.php";

    class TitleCaseGeneratorTest extends PHPUnit_Framework_TestCase
    {

        function test_makeTitleCase_oneWord()
        {
              //Arrange
              $test_TitleCaseGenerator = new TitleCaseGenerator;
              $input = "beowulf";

              //Act
              $result = $test_TitleCaseGenerator->makeTitleCase($input);

              //assert
              $this->assertEquals("Beowulf", $result);
        }

          function test_makeTitleCase_multipleWords()
          {
              //Arrange
              $test_TitleCaseGenerator = new TitleCaseGenerator;
              $input = "beowulf begins";

              //Act
              $result = $test_TitleCaseGenerator->makeTitleCase($input);

              //Assert
              $this->assertEquals("Beowulf Begins", $result);
          }

          function test_makeTitleCase_notDesignatedWords()
          {

            //Arrange
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "beowulf from brighton beach and a pig";

            //Act
            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            //Assert
            $this->assertEquals("Beowulf from Brighton Beach and a Pig", $result);
          }

          function test_makeTitleCase_capitalizeFirstWord()
          {

            //Arrange
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "from beowulf to the hulk";

            //Act
            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            //Assert
            $this->assertEquals("From Beowulf to the Hulk", $result);
          }

          function test_makeTitleCase_handlesNonLetters()
          {

            //Arrange
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "57 beowulf alternative endings!";

            //Act
            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            //Assert
            $this->assertEquals("57 Beowulf Alternative Endings!", $result);
          }

          function test_makeTitleCase_handlesCapitalsInput()
          {

            //Arrange
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "BEOWULF ON THE ROCKS";

            //Act
            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            //Assert
            $this->assertEquals("Beowulf on the Rocks", $result);
          }

          function test_makeTitleCase_handlesMixedCapitalsInput()
          {

            //Arrange
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "BeoWulF aNd mE";

            //Act
            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            //Assert
            $this->assertEquals("Beowulf and Me", $result);
          }
    }

?>
