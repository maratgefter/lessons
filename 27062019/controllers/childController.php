<?php
    class childController extends Controller
    {
        function test()
        {
            echo "<br>childController succsess!!!";
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