<?php
    class newController extends Controller
    {
        function test()
        {
            echo "<br>Controller succsess!!!";
        }

        function actionAbout()
        {
            echo "<br>childActionAbout succsess!!!";
        }

        function About()
        {
            echo "<br>childAbout succsess!!!";
        }

        function actionClassName()
        {
            echo $this->classNameNP();
        }
    }
?>