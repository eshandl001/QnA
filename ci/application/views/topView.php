<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <script language="javascript" src="/ci/js/jquery-2.1.3.min.js"></script>
        <script language="javascript" src="/ci/js/register.js"></script>
        <script language="javascript" src="/ci/js/questions.js"></script>
        <style type="text/css">
            body {
                text-align:center;
                margin:0px;
                padding:0px;
            }

            #wrapper{
                width:1100px;
                height:750px;
                background-image: url("test2.jpg");
                margin:auto;
                text-align:left;
                border-style: solid;
                border-width: 1px;
                border-color: #ADD8E6;

            }


            h1{
                text-align:center;
            }

            .btn{
                width: 200px;
            }

            hr {
                color: #f00;
                background-color: #000000;
                height: 1px;
            }


            .menu{
                font-size:20px;

            }

            .jumbotron { 
                min-height: 100px;
            }


            h2{
                text-align:right;
            }


            .custom {
                width: 78px !important;
            }

        </style>
    </head>
    
    <body onload="loadQuestions()"> 
        <div id="wrapper">

<img src="../../images/logo.jpg" alt="View" style="width:1100px;height:60px">
        <header>
                <div class="navbar navbar-default navbar-inverse">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a href="" class="navbar-brand">ProgrammersArena</a>
                        </div>
                        <div class="collpase navbar-collapse" id="example">
                                        <ul class="nav navbar-nav">
					        <li class="active"><a href="/ci/index.php/auth/homepage"><span class="glyphicon glyphicon-home"> Home </span></a></li>
						<li class="active"><a href="/ci/index.php/auth/register"><span class="glyphicon glyphicon-edit"> SignUp </span></a></li>
						<li class="active"><a href="/ci/index.php/auth/login"><span class="glyphicon glyphicon-user"> Login </span></a></li>
						<li class="active"><a href="/ci/index.php/auth/logout"><span class="glyphicon glyphicon-question-sign"> Logout </span></a></li>
						
					</ul>



                            <form action="" class="navbar-form navbar-right" role="search">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="search For Questions">
                                </div>
                                <button type="submit" class="btn btn-primary custom">Search</button>
                            </form>
                        </div>

                    </div>

                </div>


            </header>
<div class="btn">
  &emsp;&emsp;&emsp;
  <button type="button"  class="btn btn-primary" id="askq" href="#" >Ask Question</button> &emsp;&emsp;&emsp;&emsp;
  <button type="button"  class="btn btn-primary" id="ques" href="#" >Questions</button>&emsp;&emsp;&emsp;&emsp;
  <button type="button"  class="btn btn-primary" id="tags" href="#" >Tags</button>&emsp;&emsp;&emsp;&emsp;
  <button type="button"  class="btn btn-primary" id="top" href="#">Top Questions</button>&emsp;&emsp;&emsp;&emsp;
 </div>
</br> </br>
<img src="../../images/monkey.jpg" alt="View" style="width:1100px;height:100px">
</br><hr>
        <div  id="wrapper" >
            <div class="list-group" id="questions"></div>

            <div>
        </div>
    </body>

    <script lang="javascript">

        function loadQuestions() {
            //alert('load');
            getQuestions = "/ci/index.php/questioncontroller/getQuestion";

            $.ajax({
                url: getQuestions,
                success: function(data) {
                    //alert(data);
                    recentQuestion = jQuery.parseJSON(data);
                    //console.log(recentQuestion);
                    var select = $('#questions');
                    var count = 0;
                    $.each(recentQuestion, function(key, value)
                    {
                        console.log(value);
                    
                        href ="/ci/index.php/questioncontroller/viewQuestion/question/" + value.questionId;

                     
                        
                        select.append('<div class="list-group"><a href="'+href+'" class="list-group-item"><h4 class="list-group-item-heading">' + value.title + '</h4><p class="list-group-item-text">' + value.description + '</p><span class="badge">' + value.tag1 + '</span><span class="badge">' + value.tag2 + '</span><span class="badge">' + value.tag3 + '</span></a></div>');



                    });




                   
                },
                async: true,
                type: "GET"
            });
        }


    </script>
</html>
