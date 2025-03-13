<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="jquery-3.7.1.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="Quizstyle.css">
</head>

<body>

    <!-- navbar section starts here -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="navbar">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03"
                aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#" id="Quiz-logo">QUIZ</a>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav me-auto mb-12 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active " aria-current="page" href="#">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#html">HTML</a>
                    <li class="nav-item">
                        <a class="nav-link active" href="#css">CSS</a>
                    <li class="nav-item">
                        <a class="nav-link active" href="#php">PHP</a>
                    <li class="nav-item">
                        <a class="nav-link active" href="#sql">SQL</a>
                    <li class="nav-item">
                        <a class="nav-link active" href="#C">C</a>
                    <li class="nav-item">
                        <a class="nav-link active" href="#C++">C++</a>
                    <li class="nav-item">
                        <a class="nav-link active" href="#c#">C#</a>
                    <li class="nav-item">
                        <a class="nav-link active" href="#jquery">JQUERY</a>
                    <li class="nav-item">
                        <a class="nav-link active" href="#xml">XML</a>
                    <li class="nav-item">
                        <a class="nav-link active" href="#numpy">NUMPY</a>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-3" type="search" placeholder="Search" aria-label="Search"
                        spellcheck="true">
                    <button class="btn btn-outline-light me-3" type="submit" id="active">Search</button>
                    <button class="btn btn-outline-light  me-3" type="submit"><a class="active" href="#login">Login</a>
                        <button class="btn btn-outline-light" type="submit"><a class="active" href="#signup">SignUp</a>
                </form>
            </div>
        </div>
    </nav>
    <!-- navbar section ends here -->
    <section>
        <div>
            <img src="Quiz1.png " alt="image not found" style="width:1510px; height:830px; padding-top:3rem;">
        </div>

        <!-- HTML quiz section starts here-->
        <section class="html" id="html">
            <div class="container-html">
                <div class="header">
                    <h2>HTML QUIZ</h2>
                    <form action="QuizAnswer.php" method="post">
                        <h4>1.What does HTML stand for?</h4>
                        <input type="radio" name="Q1" id="input" value="A">A. Home Tool Markup Language<br>
                        <input type="radio" name="Q1" id="" value="B">B. Hyper Text Markup Language<br>
                        <input type="radio" name="Q1" id="" value="C">C. Hyperlinks and Text Markup Language<br>
                        <h4>2.Who is making the Web standards?</h4>
                        <input type="radio" name="Q2" id="" value="A">A. Google<br>
                        <input type="radio" name="Q2" id="" value="B">B. Microsoft<br>
                        <input type="radio" name="Q2" id="" value="C">C. The World Wide Web Consortium<br>

                        <h4>3.Choose the correct HTML element for the largest heading?</h4>
                        <input type="radio" name="Q3" id="" value="A">A. &lt;h1&gt;<br>
                        <input type="radio" name="Q3" id="" value="B">B. &lt;heading&gt;<br>
                        <input type="radio" name="Q3" id="" value="C">C. &lt;head&gt;<br>

                        <h4>4.What is the correct HTML element for inserting a line break?</h4>
                        <input type="radio" name="Q4" id="" value="A">A. &lt;br&gt;<br>
                        <input type="radio" name="Q4" id="" value="B">B. &lt;lb&gt;<br>
                        <input type="radio" name="Q4" id="" value="C">C. &lt;break&gt;<br>
                        <h4>5.What is the correct HTML for adding a background color?</h4>
                        <input type="radio" name="Q5" id="" value="A">A. &lt;background&gt;yellow&lt;/background&gt;<br>
                        <input type="radio" name="Q5" id="" value="B">B. &lt;body
                        style="background-color:yellow;"&gt;<br>
                        <input type="radio" name="Q5" id="" value="C">C. &lt;body bg="yellow"&gt;<br>
                        <div>
                            <button type="submit" id="btn" name="btn">Check</button><br><br>
                        </div>
                </div>
                </form>
        </section>
        <!-- HTML quiz section ends here -->


        <!-- css section starts here--->
        <section class="css" id="css">
            <div class="container-css">
                <h2>CSS QUIZ</h2>
                <form action="QuizAnswer.php" method="post">
                    <h4>1.What does CSS stand for?</h4>
                    <input type="radio" name="Q1" id="" value="a">a. Creative Style Sheets<br><!--- C--->
                    <input type="radio" name="Q1" id="" value="b">b. Computer Style Sheets<br>
                    <input type="radio" name="Q1" id="" value="c">c. Cascading Style Sheets<br>
                    <input type="radio" name="Q1" id="" value="d">d. Colorful Style Sheets<br>

                    <h4>2.Which CSS property is used to control the spacing between elements?</h4>
                    <input type="radio" name="Q2" id="" value="a">a. margin<br>
                    <input type="radio" name="Q2" id="" value="b">b. padding<br><!--- A--->
                    <input type="radio" name="Q2" id="" value="c">c. spacing<br>
                    <input type="radio" name="Q2" id="" value="d">d. border-spacing<br>


                    <h4>3.How can you center an element horizontally in CSS?</h4>
                    <input type="radio" name="Q3" id="" value="a">a. text-align: center;<br>
                    <input type="radio" name="Q3" id="" value="b">b. margin: auto;<br><!--- B--->
                    <input type="radio" name="Q3" id="" value="c">c. align: center;<br>
                    <input type="radio" name="Q3" id="" value="d">d. center: horizontal;<br>


                    <h4>4.What is the purpose of the "box-sizing" property in CSS?</h4>
                    <input type="radio" name="Q4" id="" value="a">a. It sets the background color of an element.<br>
                    <input type="radio" name="Q4" id="" value="b">b. It adjusts the size of a box model element.<br>
                    <input type="radio" name="Q4" id="" value="c">c. It defines the border style of an element.<br>
                    <input type="radio" name="Q4" id="" value="d">d. It specifies the shape of a box.<br><!--- B--->

                    <h4>5.What does the "rgba" value represent in CSS?</h4>
                    <input type="radio" name="Q5" id="" value="a">a. A unit of measurement for text size.<br>
                    <input type="radio" name="Q5" id="" value="b">b. A color value with red, green, blue, and alpha(transparency) components.<br>
                    <input type="radio" name="Q5" id="" value="c">c. A shorthand for specifying marginvalues.<br><!--- B--->
                    <input type="radio" name="Q5" id="" value="d">d. A CSS selector for targeting specific elements.<br>
                    <div>
                        <button type="submit" id="btn" name="btn">Check</button><br><br>
                    </div>
        </section>
        <!-- css section ends here--->


        <!-- php section starts here -->
        <section class="php" id="php">
            <div class="container-css">
                <h2>PHP QUIZ</h2>
                <form action="QuizAnswer.php">
                    <h4>1.What does PHP stand for?</h4>
                    <input type="radio" name="Q1" id="" value="A">A. Personal Home Page<br><!--- A--->
                    <input type="radio" name="Q1" id="" value="B">B. Preprocessed Hypertext Processor<br>
                    <input type="radio" name="Q1" id="" value="C">C. Hypertext Markup Language<br>
                    <input type="radio" name="Q1" id="" value="D">D. Public Hosting Platform<br>
                    <h4>2.Question: Which of the following PHP data types is not scalar?</h4>
                    <input type="radio" name="Q2" id="" value="A">A. int<br>
                    <input type="radio" name="Q2" id="" value="B">B. string<br>
                    <input type="radio" name="Q2" id="" value="C">C. boolean<br><!--- D--->
                    <input type="radio" name="Q2" id="" value="D">D. array<br>
                    <h4>3.What is the purpose of the 'echo' function in PHP?</h4>
                    <input type="radio" name="Q3" id="" value="A">A. To display errors<br><!--- A--->
                    <input type="radio" name="Q3" id="" value="B">B. To print text to the screen<br>
                    <input type="radio" name="Q3" id="" value="C">C. To define a constant<br>
                    <input type="radio" name="Q3" id="" value="D">D. To create an array<br>
                    <h4>4.Which PHP function is used to connect to a MySQL database?</h4>
                    <input type="radio" name="Q4" id="" value="A">A. connect_db()<br><!--- B--->
                    <input type="radio" name="Q4" id="" value="B">B. mysql_connect()<br>
                    <input type="radio" name="Q4" id="" value="C">C. db_connect()<br>
                    <input type="radio" name="Q4" id="" value="D">D. mysqli_connect()<br>
                    <h4>5.What does the '$_POST' superglobal in PHP represent?</h4>
                    <input type="radio" name="Q5" id="" value="A">A. Cookies sent to the server<br><!--- B--->
                    <input type="radio" name="Q5" id="" value="B">B. Data submitted through a POST request<br>
                    <input type="radio" name="Q5" id="" value="C">C. Server environment variables<br>
                    <input type="radio" name="Q5" id="" value="D">D. Query parameters in the URL<br>
                    <div>
                        <button type="submit" id="btn" name="btn">Check</button><br><br>
                    </div>
                </form>
            </div>
        </section>
        <!-- php section ends here -->


        <!-- SQL section starts here -->
        <section class="sql" id="sql">
            <div class="container-css">
                <h2>SQL QUIZ</h2>
                <form action="QuizAnswer.php">
                    <h4>1.What does PHP stand for?</h4>
                    <input type="radio" name="Q1" id="" value="A">A. Personal Home Page<br>
                    <input type="radio" name="Q1" id="" value="B">B. Preprocessed Hypertext Processor<br>
                    <input type="radio" name="Q1" id="" value="C">C. Hypertext Markup Language<br>
                    <input type="radio" name="Q1" id="" value="D">D. Public Hosting Platform<br>
                    <h4>2.Question: Which of the following PHP data types is not scalar?</h4>
                    <input type="radio" name="Q2" id="" value="A">A. int<br>
                    <input type="radio" name="Q2" id="" value="B">B. string<br>
                    <input type="radio" name="Q2" id="" value="C">C. boolean<br>
                    <input type="radio" name="Q2" id="" value="D">D. array<br>
                    <h4>3.What is the purpose of the 'echo' function in PHP?</h4>
                    <input type="radio" name="Q3" id="" value="A">A. To display errors<br>
                    <input type="radio" name="Q3" id="" value="B">B. To print text to the screen<br>
                    <input type="radio" name="Q3" id="" value="C">C. To define a constant<br>
                    <input type="radio" name="Q3" id="" value="D">D. To create an array<br>
                    <h4>4.Which PHP function is used to connect to a MySQL database?</h4>
                    <input type="radio" name="Q4" id="" value="A">A. connect_db()<br>
                    <input type="radio" name="Q4" id="" value="B">B. mysql_connect()<br>
                    <input type="radio" name="Q4" id="" value="C">C. db_connect()<br>
                    <input type="radio" name="Q4" id="" value="D">D. mysqli_connect()<br>
                    <h4>5.What does the '$_POST' superglobal in PHP represent?</h4>
                    <input type="radio" name="Q5" id="" value="A">A. Cookies sent to the server<br>
                    <input type="radio" name="Q5" id="" value="B">B. Data submitted through a POST request<br>
                    <input type="radio" name="Q5" id="" value="C">C. Server environment variables<br>
                    <input type="radio" name="Q5" id="" value="D">D. Query parameters in the URL<br>
                    <div>
                        <button type="submit" id="btn" name="btn">Check</button><br><br>
                    </div>
                </form>
            </div>
        </section>
        <!-- SQL section ends here -->

        <!-- C Programming section starts here -->
        <section class="C" id="C">
            <div class="container-css">
                <h2>C Progm QUIZ</h2>
                <form action="QuizAnswer.php">
                    <h4>1.What does PHP stand for?</h4>
                    <input type="radio" name="Q1" id="" value="A">A. Personal Home Page<br><!--- A--->
                    <input type="radio" name="Q1" id="" value="B">B. Preprocessed Hypertext Processor<br>
                    <input type="radio" name="Q1" id="" value="C">C. Hypertext Markup Language<br>
                    <input type="radio" name="Q1" id="" value="D">D. Public Hosting Platform<br>
                    <h4>2.Question: Which of the following PHP data types is not scalar?</h4>
                    <input type="radio" name="Q2" id="" value="A">A. int<br>
                    <input type="radio" name="Q2" id="" value="B">B. string<br>
                    <input type="radio" name="Q2" id="" value="C">C. boolean<br><!--- D--->
                    <input type="radio" name="Q2" id="" value="D">D. array<br>
                    <h4>3.What is the purpose of the 'echo' function in PHP?</h4>
                    <input type="radio" name="Q3" id="" value="A">A. To display errors<br><!--- A--->
                    <input type="radio" name="Q3" id="" value="B">B. To print text to the screen<br>
                    <input type="radio" name="Q3" id="" value="C">C. To define a constant<br>
                    <input type="radio" name="Q3" id="" value="D">D. To create an array<br>
                    <h4>4.Which PHP function is used to connect to a MySQL database?</h4>
                    <input type="radio" name="Q4" id="" value="A">A. connect_db()<br><!--- B--->
                    <input type="radio" name="Q4" id="" value="B">B. mysql_connect()<br>
                    <input type="radio" name="Q4" id="" value="C">C. db_connect()<br>
                    <input type="radio" name="Q4" id="" value="D">D. mysqli_connect()<br>
                    <h4>5.What does the '$_POST' superglobal in PHP represent?</h4>
                    <input type="radio" name="Q5" id="" value="A">A. Cookies sent to the server<br><!--- B--->
                    <input type="radio" name="Q5" id="" value="B">B. Data submitted through a POST request<br>
                    <input type="radio" name="Q5" id="" value="C">C. Server environment variables<br>
                    <input type="radio" name="Q5" id="" value="D">D. Query parameters in the URL<br>
                    <div>
                        <button type="submit" id="btn" name="btn">Check</button><br><br>
                    </div>
                </form>
            </div>
        </section>
        <!-- C Programming section ends here -->

        <!-- C++ section starts here -->
        <section class="C++" id="C++">
            <div class="container-css">
                <h2>C++ QUIZ</h2>
                <form action="QuizAnswer.php">
                    <h4>1.What does PHP stand for?</h4>
                    <input type="radio" name="Q1" id="" value="A">A. Personal Home Page<br>
                    <input type="radio" name="Q1" id="" value="B">B. Preprocessed Hypertext Processor<br>
                    <input type="radio" name="Q1" id="" value="C">C. Hypertext Markup Language<br>
                    <input type="radio" name="Q1" id="" value="D">D. Public Hosting Platform<br>
                    <h4>2.Question: Which of the following PHP data types is not scalar?</h4>
                    <input type="radio" name="Q2" id="" value="A">A. int<br>
                    <input type="radio" name="Q2" id="" value="B">B. string<br>
                    <input type="radio" name="Q2" id="" value="C">C. boolean<br>
                    <input type="radio" name="Q2" id="" value="D">D. array<br>
                    <h4>3.What is the purpose of the 'echo' function in PHP?</h4>
                    <input type="radio" name="Q3" id="" value="A">A. To display errors<br>
                    <input type="radio" name="Q3" id="" value="B">B. To print text to the screen<br>
                    <input type="radio" name="Q3" id="" value="C">C. To define a constant<br>
                    <input type="radio" name="Q3" id="" value="D">D. To create an array<br>
                    <h4>4.Which PHP function is used to connect to a MySQL database?</h4>
                    <input type="radio" name="Q4" id="" value="A">A. connect_db()<br>
                    <input type="radio" name="Q4" id="" value="B">B. mysql_connect()<br>
                    <input type="radio" name="Q4" id="" value="C">C. db_connect()<br>
                    <input type="radio" name="Q4" id="" value="D">D. mysqli_connect()<br>
                    <h4>5.What does the '$_POST' superglobal in PHP represent?</h4>
                    <input type="radio" name="Q5" id="" value="A">A. Cookies sent to the server<br>
                    <input type="radio" name="Q5" id="" value="B">B. Data submitted through a POST request<br>
                    <input type="radio" name="Q5" id="" value="C">C. Server environment variables<br>
                    <input type="radio" name="Q5" id="" value="D">D. Query parameters in the URL<br>
                    <div>
                        <button type="submit" id="btn" name="btn">Check</button><br><br>
                    </div>
                </form>
            </div>
        </section>
        <!-- C++ section ends here -->

        <!-- C# section starts here -->
        <section class="c#" id="c#">
            <div class="container-css">
                <h2>C# QUIZ</h2>
                <form action="QuizAnswer.php">
                    <h4>1.What does PHP stand for?</h4>
                    <input type="radio" name="Q1" id="" value="A">A. Personal Home Page<br><!--- A--->
                    <input type="radio" name="Q1" id="" value="B">B. Preprocessed Hypertext Processor<br>
                    <input type="radio" name="Q1" id="" value="C">C. Hypertext Markup Language<br>
                    <input type="radio" name="Q1" id="" value="D">D. Public Hosting Platform<br>
                    <h4>2.Question: Which of the following PHP data types is not scalar?</h4>
                    <input type="radio" name="Q2" id="" value="A">A. int<br>
                    <input type="radio" name="Q2" id="" value="B">B. string<br>
                    <input type="radio" name="Q2" id="" value="C">C. boolean<br><!--- D--->
                    <input type="radio" name="Q2" id="" value="D">D. array<br>
                    <h4>3.What is the purpose of the 'echo' function in PHP?</h4>
                    <input type="radio" name="Q3" id="" value="A">A. To display errors<br><!--- A--->
                    <input type="radio" name="Q3" id="" value="B">B. To print text to the screen<br>
                    <input type="radio" name="Q3" id="" value="C">C. To define a constant<br>
                    <input type="radio" name="Q3" id="" value="D">D. To create an array<br>
                    <h4>4.Which PHP function is used to connect to a MySQL database?</h4>
                    <input type="radio" name="Q4" id="" value="A">A. connect_db()<br><!--- B--->
                    <input type="radio" name="Q4" id="" value="B">B. mysql_connect()<br>
                    <input type="radio" name="Q4" id="" value="C">C. db_connect()<br>
                    <input type="radio" name="Q4" id="" value="D">D. mysqli_connect()<br>
                    <h4>5.What does the '$_POST' superglobal in PHP represent?</h4>
                    <input type="radio" name="Q5" id="" value="A">A. Cookies sent to the server<br><!--- B--->
                    <input type="radio" name="Q5" id="" value="B">B. Data submitted through a POST request<br>
                    <input type="radio" name="Q5" id="" value="C">C. Server environment variables<br>
                    <input type="radio" name="Q5" id="" value="D">D. Query parameters in the URL<br>
                    <div>
                        <button type="submit" id="btn" name="btn">Check</button><br><br>
                    </div>
                </form>
            </div>
        </section>
        <!-- C# section ends here -->

        <!-- Jquery section starts here -->
        <section class="jquery" id="jquery">
            <div class="container-css">
                <h2>Jquery QUIZ</h2>
                <form action="QuizAnswer.php">
                    <h4>1.What does PHP stand for?</h4>
                    <input type="radio" name="Q1" id="" value="A">A. Personal Home Page<br><!--- A--->
                    <input type="radio" name="Q1" id="" value="B">B. Preprocessed Hypertext Processor<br>
                    <input type="radio" name="Q1" id="" value="C">C. Hypertext Markup Language<br>
                    <input type="radio" name="Q1" id="" value="D">D. Public Hosting Platform<br>
                    <h4>2.Question: Which of the following PHP data types is not scalar?</h4>
                    <input type="radio" name="Q2" id="" value="A">A. int<br>
                    <input type="radio" name="Q2" id="" value="B">B. string<br>
                    <input type="radio" name="Q2" id="" value="C">C. boolean<br><!--- D--->
                    <input type="radio" name="Q2" id="" value="D">D. array<br>
                    <h4>3.What is the purpose of the 'echo' function in PHP?</h4>
                    <input type="radio" name="Q3" id="" value="A">A. To display errors<br><!--- A--->
                    <input type="radio" name="Q3" id="" value="B">B. To print text to the screen<br>
                    <input type="radio" name="Q3" id="" value="C">C. To define a constant<br>
                    <input type="radio" name="Q3" id="" value="D">D. To create an array<br>
                    <h4>4.Which PHP function is used to connect to a MySQL database?</h4>
                    <input type="radio" name="Q4" id="" value="A">A. connect_db()<br><!--- B--->
                    <input type="radio" name="Q4" id="" value="B">B. mysql_connect()<br>
                    <input type="radio" name="Q4" id="" value="C">C. db_connect()<br>
                    <input type="radio" name="Q4" id="" value="D">D. mysqli_connect()<br>
                    <h4>5.What does the '$_POST' superglobal in PHP represent?</h4>
                    <input type="radio" name="Q5" id="" value="A">A. Cookies sent to the server<br><!--- B--->
                    <input type="radio" name="Q5" id="" value="B">B. Data submitted through a POST request<br>
                    <input type="radio" name="Q5" id="" value="C">C. Server environment variables<br>
                    <input type="radio" name="Q5" id="" value="D">D. Query parameters in the URL<br>
                    <div>
                        <button type="submit" id="btn" name="btn">Check</button><br><br>
                    </div>
                </form>
            </div>
        </section>
        <!-- Jquery section ends here -->

        <!-- xml section starts here -->
        <section class="xml" id="xml">
            <div class="container-css">
                <h2>XML QUIZ</h2>
                <form action="QuizAnswer.php">
                    <h4>1.What does PHP stand for?</h4>
                    <input type="radio" name="Q1" id="" value="A">A. Personal Home Page<br><!--- A--->
                    <input type="radio" name="Q1" id="" value="B">B. Preprocessed Hypertext Processor<br>
                    <input type="radio" name="Q1" id="" value="C">C. Hypertext Markup Language<br>
                    <input type="radio" name="Q1" id="" value="D">D. Public Hosting Platform<br>
                    <h4>2.Question: Which of the following PHP data types is not scalar?</h4>
                    <input type="radio" name="Q2" id="" value="A">A. int<br>
                    <input type="radio" name="Q2" id="" value="B">B. string<br>
                    <input type="radio" name="Q2" id="" value="C">C. boolean<br><!--- D--->
                    <input type="radio" name="Q2" id="" value="D">D. array<br>
                    <h4>3.What is the purpose of the 'echo' function in PHP?</h4>
                    <input type="radio" name="Q3" id="" value="A">A. To display errors<br><!--- A--->
                    <input type="radio" name="Q3" id="" value="B">B. To print text to the screen<br>
                    <input type="radio" name="Q3" id="" value="C">C. To define a constant<br>
                    <input type="radio" name="Q3" id="" value="D">D. To create an array<br>
                    <h4>4.Which PHP function is used to connect to a MySQL database?</h4>
                    <input type="radio" name="Q4" id="" value="A">A. connect_db()<br><!--- B--->
                    <input type="radio" name="Q4" id="" value="B">B. mysql_connect()<br>
                    <input type="radio" name="Q4" id="" value="C">C. db_connect()<br>
                    <input type="radio" name="Q4" id="" value="D">D. mysqli_connect()<br>
                    <h4>5.What does the '$_POST' superglobal in PHP represent?</h4>
                    <input type="radio" name="Q5" id="" value="A">A. Cookies sent to the server<br><!--- B--->
                    <input type="radio" name="Q5" id="" value="B">B. Data submitted through a POST request<br>
                    <input type="radio" name="Q5" id="" value="C">C. Server environment variables<br>
                    <input type="radio" name="Q5" id="" value="D">D. Query parameters in the URL<br>
                    <div>
                        <button type="submit" id="btn" name="btn">Check</button><br><br>
                    </div>
                </form>
            </div>
        </section>
        <!-- Xml section ends here -->

        <!-- numpy section starts here -->
        <section class="numpy" id="numpy">
            <div class="container-css">
                <h2>NUMPY QUIZ</h2>
                <form action="QuizAnswer.php">
                    <h4>1.What does PHP stand for?</h4>
                    <input type="radio" name="Q1" id="" value="A">A. Personal Home Page<br><!--- A--->
                    <input type="radio" name="Q1" id="" value="B">B. Preprocessed Hypertext Processor<br>
                    <input type="radio" name="Q1" id="" value="C">C. Hypertext Markup Language<br>
                    <input type="radio" name="Q1" id="" value="D">D. Public Hosting Platform<br>
                    <h4>2.Question: Which of the following PHP data types is not scalar?</h4>
                    <input type="radio" name="Q2" id="" value="A">A. int<br>
                    <input type="radio" name="Q2" id="" value="B">B. string<br>
                    <input type="radio" name="Q2" id="" value="C">C. boolean<br><!--- D--->
                    <input type="radio" name="Q2" id="" value="D">D. array<br>
                    <h4>3.What is the purpose of the 'echo' function in PHP?</h4>
                    <input type="radio" name="Q3" id="" value="A">A. To display errors<br><!--- A--->
                    <input type="radio" name="Q3" id="" value="B">B. To print text to the screen<br>
                    <input type="radio" name="Q3" id="" value="C">C. To define a constant<br>
                    <input type="radio" name="Q3" id="" value="D">D. To create an array<br>
                    <h4>4.Which PHP function is used to connect to a MySQL database?</h4>
                    <input type="radio" name="Q4" id="" value="A">A. connect_db()<br><!--- B--->
                    <input type="radio" name="Q4" id="" value="B">B. mysql_connect()<br>
                    <input type="radio" name="Q4" id="" value="C">C. db_connect()<br>
                    <input type="radio" name="Q4" id="" value="D">D. mysqli_connect()<br>
                    <h4>5.What does the '$_POST' superglobal in PHP represent?</h4>
                    <input type="radio" name="Q5" id="" value="A">A. Cookies sent to the server<br><!--- B--->
                    <input type="radio" name="Q5" id="" value="B">B. Data submitted through a POST request<br>
                    <input type="radio" name="Q5" id="" value="C">C. Server environment variables<br>
                    <input type="radio" name="Q5" id="" value="D">D. Query parameters in the URL<br>
                    <div>
                        <button type="submit" id="btn" name="btn">Check</button><br><br>
                    </div>
                </form>
            </div>
        </section>
        <!-- numpy section ends here -->



        <section class="login" id="login">
            <form action="" id="form">
            <div class="container">
                <div class="box">
                    <div class="iconbox">
                        <h1 class="heading"><img src="user.png" alt="image not found" id="user"></h1>
                        <h4>Sign in</h4>
                    </div>
                    <div>
                        <label>Username</label>
                        <div>
                            <input type="email" name="email" id="email" maxlength="50">
                        </div>
                        <label>Password</label>
                        <div>
                            <input type="password" name="password" id="password" maxlength="8">
                            <button class="button"><b>Login</b></button>
                        </div>
                        <a href="#forget" id="forget">Forget Password?</a>
                        <a href="#" id="signup">Create an Account?Sign up</a>
                        </div>
                </div>
                </div>
            </div>
            </form>
        </section> 


        <script>
            let navbar = document.querySelector('.header .nav');
            let header = document.querySelector('.header');
            window.onscroll = () => {
                navbar.classList.remove('active');
            }
            if (window.scrollY > 0) {
                header.classList.add('active');
            }
            else {
                header.classList.remove('active');
            }

        </script>

        <script>
            $(document).ready(function(){
                $("#form").submit(function(e){
                   var  $email = $("#email").val();
                   var  $password = $("#password").val();
                   $(".error").remove();
                   if($email.length < 3){
                        $("#email").after('<span class="error"><br>Must be include at-least 1 special character.</span>');
                   }
                   if($password.length < 8){
                        $("#password").after('<span class="error"><br>password must be at-least 8 digits.</span>');
                   }

                });
           });

        </script>
</body>

</html>