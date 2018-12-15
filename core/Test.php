<?php
    namespace Core;

    class Test {
        static $MY_CONST = 'HELLO';

        function __construct() {
            echo "<br>ROUTER TEST PASSED<br>";
        }

        function testFunc() {
            echo "<br>TEST FUNC<br>";
        }
    }