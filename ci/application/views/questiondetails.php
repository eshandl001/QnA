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
        
            <input type="hidden" id="question" name="question" value="<?php echo $question; ?>">
            <input type="hidden" id="username" name="username" value="<?php echo $username; ?>">
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
            <h1>Question</h1>
        <div  id="wrapper" >
            <div class="list-group" id="questions"></div>
            <div class="list-group" id="answers"></div></br></br>
            
            <textarea class="form-control" id="answerdescription"></textarea></br></br>
            <button onclick="postanswer()" type="button" class="btn btn-primary align-right">Post Answer</button>

            <div>
        </div>
    </body>

    <script lang="javascript">

        function loadQuestions() {
            getQuestions = "/ci/index.php/questioncontroller/getQuestion";

            $.ajax({
                url: getQuestions,
                success: function(data) {
                    //alert(data);
                    Questions = jQuery.parseJSON(data);
                    //console.log(recentQuestion);
                    var select = $('#questions');
                    var count = 0;
                    select.append('');
                    $.each(Questions, function(key, value)
                    {
                        //console.log(value);
                    
                        href ="/ci/index.php/questioncontroller/viewQuestion/question/" + value.questionId;

                        //alert(value.description);
                        if($('#question').val() == value.questionId){
                            select.append('<div class="list-group"><a class="list-group-item"><h4 class="list-group-item-heading">' + value.title + '</h4>\n\
                                            <hr> <span onclick="upvotequestion();" class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span><p id="questionrating" class="list-group-item-text .pull-right">' + value.qRating + '</p><span onclick="downvotequestion();" class="glyphicon glyphicon-thumbs-down" aria-hidden="true"></span>\n\
                                            <hr><p class="list-group-item-text">' + value.description + '</p>\n\
                                            <hr><p class="list-group-item-text">Subject :-  ' + value.subject + '</p>\n\
                                            <p class="list-group-item-text">Username :-  ' + value.username + '</p><span class="badge">' + value.tag1 + '</span><span class="badge">' + value.tag2 + '</span>\n\
                                            <span class="badge">' + value.tag3 + '</span></a></div>');
                        }
                    });


//                    $('#searchresult').html(data);
//
                    //alert(data);
                },
                async: true,
                type: "GET"
            });
            
            
            
            getAnswers = "/ci/index.php/answerController/getAnswers";

            $.ajax({
                url: getAnswers,
                success: function(data) {
                    //alert(data);
                    answers = jQuery.parseJSON(data);
                    //console.log(recentQuestion);
                    var select = $('#answers');
                    var count = 0;
                    select.append('');
                    $.each(answers, function(key, value)
                    {
                        count++;
                        if($('#question').val() == value.questionId){
                            select.append('<div class="list-group"><a class="list-group-item">\n\
                                            <hr> <span onclick="upvoteanswer('+'\'' + $.trim(value.answerId) + '\''+','+'\'' + $.trim(count) + '\''+');" class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span><p id="answerrating'+count+'" class="list-group-item-text .pull-right">' + value.answerRating + '</p><span onclick="downvoteanswer('+'\'' + $.trim(value.answerId) + '\''+','+'\'' + $.trim(count) + '\''+');" class="glyphicon glyphicon-thumbs-down" aria-hidden="true"></span>\n\
                                            <hr><p class="list-group-item-text">' + value.answer + '</p>\n\
                                            <hr><p class="list-group-item-text">Username :-  ' + value.username + '</p></a></div>');
                       }
                    });


//                    $('#searchresult').html(data);
//
                    //alert(data);
                },
                async: true,
                type: "GET"
            });
        }

        function upvotequestion(){
            $('#questionrating').text(parseInt($("#questionrating").text()) + 1);
            $.ajax({
                    url: '/ci/index.php/questioncontroller/upvotequestion',
                    dataType: "json",
                    data: {
                        questionId: $('#question').val()
                    }, 
                    success: function (data) {
                        
                    },
                    async: true,
                    type: "POST"
            });
            
        }
        function downvotequestion(){
               $('#questionrating').text(parseInt($("#questionrating").text()) - 1);
            $.ajax({
                    url: '/ci/index.php/questioncontroller/upvotequestion',
                    dataType: "json",
                    data: {
                        questionId: $('#question').val()
                    }, 
                    success: function (data) {
                        
                    },
                    async: true,
                    type: "POST"
            });
        }
        function upvoteanswer(answerId, count){
            //alert(answerId);
            $('#answerrating'+count).text(parseInt($("#answerrating"+count).text()) + 1);
            $.ajax({
                    url: '/ci/index.php/answerController/upvoteanswer',
                    dataType: "json",
                    data: {
                        answerId: answerId
                    }, 
                    success: function (data) {
                        
                    },
                    async: true,
                    type: "POST"
            });
        }
        
        
             function downvoteanswer(answerId, count){
            //alert(answerId);
            $('#answerrating'+count).text(parseInt($("#answerrating"+count).text()) - 1);
            $.ajax({
                    url: '/ci/index.php/answerController/upvoteanswer',
                    dataType: "json",
                    data: {
                        answerId: answerId
                    }, 
                    success: function (data) {
                        
                    },
                    async: true,
                    type: "POST"
            });
        }
        
        
    
        function postanswer(){
        if($('#username').val() != ""){
            alert($('#answerdescription').val());
            $.ajax({
                    url: '/ci/index.php/answerController/postanswer',
                    dataType: "json",
                    data: {
                        answerDescription: $('#answerdescription').val(),
                        username: $('#username').val(),
                        questionId: $('#question').val()
                    }, 
                    success: function (data) {
                        
                    },
                    async: true,
                    type: "POST"
            });
        }else{
            alert('Please be logged in to post answers');
        }
        }
        
    </script>
</html>
