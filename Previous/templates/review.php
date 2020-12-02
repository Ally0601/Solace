<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Review | Solace</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="../static/css/review.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    </head>
    <body>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse collapse" id="collapsibleNavbar">
                    <ul class="nav navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="home.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="books.html">Books</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="cart.html">My Cart</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="wish.html">Wish List</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Review</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item ">
                            <form class="form-inline " action="logout.php">
                            <button class="btn btn-light" type="submit"><span class="fa fa-lock"></span> Logout</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class='loader'>
            <div class='loader_inner'>
                <img class='pawone' src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/paw1.png'>
                <img class='pawtwo' src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/l1.png'>
                <img class='pawone' src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/paw2.png'>
                <img class='pawtwo' src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/l2.png'>
                <img class='pawone' src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/paw1.png'>
                <img class='pawtwo' src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/l3.png'>
                <div class='div'>Loading feedback form...</div>
            </div>
        </div>
        <div class='tut'>
            <div class='tut_inner'>
                <h2>Drag the characters mouths to reflect your satisfaction</h2>
                <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/Dec_31,_2015_22:28.gif'>
                <p>Ok</p>
            </div>
        </div>
        <div class='question'>
            <p>?</p>
        </div>
        <div class='feedbackform'>
            <div class='feedbackform_slide first active_slide'>
                <img class='sb monkey' src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/sunburst.svg'>
                <div class='grad monkey'></div>
                <div class='feedbackform_slide__inner'>
                    <h1 class='question_s'></h1>
                    <h2>Drag the cheeky monkeys mouth up or down to reflect your satisfaction!</h2>
                    <div class='character'>
                        <div class='character_image'>
                            <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/monkey.svg'>
                        </div>
                        <div class='character_smile'>
                            <div class='smiler_input'>
                                <input class='monkey' max='20' min='0' type='range'>
                                <svg class='smile monkey' height='20px' version='1.1' width='70px' xmlns='http://www.w3.org/2000/svg'>
                                    <path d='M10 10 C 20 10, 40 10, 50 10' fill='transparent' stroke-linecap='round' stroke-width='4' stroke='#562911'></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class='rating monkey'>
                        <span>Average</span>
                        <img class='next' src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/greenbutton3.png'>
                    </div>
                </div>
            </div>
            <div class='feedbackform_slide'>
                <img class='sb rabbit' src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/circback.svg'>
                <div class='grad rabbit'></div>
                <div class='feedbackform_slide__inner'>
                    <h1 class='question_s'></h1>
                    <h2>Drag the fluffy rabbits mouth up or down to reflect your satisfaction!</h2>
                    <div class='character rabbit'>
                        <div class='character_image'>
                            <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/rabbit.svg'>
                        </div>
                        <div class='character_smile'>
                            <div class='smiler_input'>
                                <input class='rabbit' max='20' min='0' type='range'>
                                <svg class='smile rabbit' height='20px' version='1.1' width='70px' xmlns='http://www.w3.org/2000/svg'>
                                    <path d='M10 10 C 20 10, 40 10, 50 10' fill='transparent' stroke-linecap='round' stroke-width='4' stroke='#562911'></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class='rating rabbit'>
                        <span>Average</span>
                        <img class='next' src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/greenbutton3.png'>
                        <img class='prev' src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/greenbutton4.png'>
                    </div>
                </div>
            </div>
            <div class='feedbackform_slide'>
                <img class='sb panda' src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/hexback.svg'>
                <div class='grad panda'></div>
                <div class='feedbackform_slide__inner'>
                    <h1 class='question_s'></h1>
                    <h2>Drag the shy pandas mouth up or down to reflect your satisfaction!</h2>
                    <div class='character'>
                        <div class='character_image'>
                            <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/panda.svg'>
                        </div>
                        <div class='character_smile'>
                            <div class='smiler_input'>
                                <input class='panda' max='20' min='0' type='range'>
                                <svg class='smile panda' height='20px' version='1.1' width='70px' xmlns='http://www.w3.org/2000/svg'>
                                    <path d='M10 10 C 20 10, 40 10, 50 10' fill='transparent' stroke-linecap='round' stroke-width='4' stroke='black'></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class='rating panda'>
                        <span>Average</span>
                        <img class='next' src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/greenbutton3.png'>
                        <img class='prev' src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/greenbutton4.png'>
                    </div>
                </div>
            </div>
            <div class='feedbackform_slide'>
                <img class='sb lion' src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/sunburst.svg'>
                <div class='grad lion'></div>
                <div class='feedbackform_slide__inner'>
                    <h1 class='question_s'></h1>
                    <h2>Drag the lions mouth up or down to reflect your satisfaction!</h2>
                    <div class='character'>
                        <div class='character_image'>
                            <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/lion.svg'>
                        </div>
                        <div class='character_smile'>
                            <div class='smiler_input'>
                                <input class='lion' max='20' min='0' type='range'>
                                <svg class='smile lion' height='20px' version='1.1' width='70px' xmlns='http://www.w3.org/2000/svg'>
                                    <path d='M10 10 C 20 10, 40 10, 50 10' fill='transparent' stroke-linecap='round' stroke-width='4' stroke='black'></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class='rating lion'>
                        <span>Average</span>
                        <img class='next' src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/greenbutton3.png'>
                        <img class='prev' src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/greenbutton4.png'>
                    </div>
                </div>
            </div>
            <div class='feedbackform_slide'>
                <div class='feedbackform_slide__inner'>
                    <div class='col_left'>
                        <img class='board' src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/resultboard.png'>
                        <div class='summary'></div>
                    </div>
                    <div class='col_right'>
                        <div class='rating end'>
                            <span>Thankyou!</span>
                            <!-- <img class='prev' src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/greenbutton4.png'>-->
                            <a href='home.php'>Return to homepage</a> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="../static/js/review.js"></script>  
        <script>
            var arrayToPublish = publish_answers();
            console.log(arrayToPublish);
        </script>
        <?php
            echo "<script>document.writeln(arrayToPublish);</script>";
            ?>
    </body>
</html>