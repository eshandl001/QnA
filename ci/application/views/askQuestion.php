<html>
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <script language="javascript" src="/ci/js/register.js"></script>


        <style>
            body {
                text-align:center;
                margin:0px;
                padding:0px;
            }

            #wrapper{
                width:1100px;
                height:1000px;
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


.form-style-1 {
    margin:10px auto;
    max-width: 400px;
    padding: 20px 12px 10px 20px;
    font: 13px "Lucida Sans Unicode", "Lucida Grande", sans-serif;
}
.form-style-1 li {
    padding: 0;
    display: block;
    list-style: none;
    margin: 10px 0 0 0;
}
.form-style-1 label{
    margin:0 0 3px 0;
    padding:0px;
    display:block;
    font-weight: bold;
}
.form-style-1 input[type=text], 
.form-style-1 input[type=date],
.form-style-1 input[type=datetime],
.form-style-1 input[type=number],
.form-style-1 input[type=search],
.form-style-1 input[type=time],
.form-style-1 input[type=url],
.form-style-1 input[type=email],
textarea, 
select{
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    border:1px solid #BEBEBE;
    padding: 7px;
    margin:0px;
    -webkit-transition: all 0.30s ease-in-out;
    -moz-transition: all 0.30s ease-in-out;
    -ms-transition: all 0.30s ease-in-out;
    -o-transition: all 0.30s ease-in-out;
    outline: none;  
}
.form-style-1 input[type=text]:focus, 
.form-style-1 input[type=date]:focus,
.form-style-1 input[type=datetime]:focus,
.form-style-1 input[type=number]:focus,
.form-style-1 input[type=search]:focus,
.form-style-1 input[type=time]:focus,
.form-style-1 input[type=url]:focus,
.form-style-1 input[type=email]:focus,
.form-style-1 textarea:focus, 
.form-style-1 select:focus{
    -moz-box-shadow: 0 0 8px #88D5E9;
    -webkit-box-shadow: 0 0 8px #88D5E9;
    box-shadow: 0 0 8px #88D5E9;
    border: 1px solid #88D5E9;
}
.form-style-1 .field-divided{
    width: 49%;
}

.form-style-1 .field-long{
    width: 100%;
}
.form-style-1 .field-select{
    width: 100%;
}
.form-style-1 .field-textarea{
    height: 100px;
}
.form-style-1 input[type=submit], .form-style-1 input[type=button]{
    background: #4B99AD;
    padding: 8px 15px 8px 15px;
    border: none;
    color: #fff;
}
.form-style-1 input[type=submit]:hover, .form-style-1 input[type=button]:hover{
    background: #4691A4;
    box-shadow:none;
    -moz-box-shadow:none;
    -webkit-box-shadow:none;
}
.form-style-1 .required{
    color:red;
}


        </style>
    </head>

    <body>
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
            </br> </br> <hr> 
             <p><center>Ask Question</center><p>
             <hr>


            
            
            <form action="/ci/index.php/questioncontroller/submitQuestion" method="POST">
<ul class="form-style-1">    
    <li>
        <label>Title <span class="required">*</span></label>
        <input type="text" name="title" class="field-long" />
    </li>
    <li>
        <label>Subject</label>
        <select name="subject" class="field-select">
        <option value="Mobile">Mobile</option>
        <option value="Web">Web</option>
        <option value="Desktop">Desktop</option>
        </select>
    </li>
    <li>
        <label>Description <span class="required">*</span></label>
        <textarea name="description" id="description" class="field-long field-textarea"></textarea>
    </li>
	
	<li>
        <label>Tags: </label>
        <input type="text" name="tag1" style="width: 100px;"/>
		<input type="text" name="tag2" style="width: 100px;"/>
		<input type="text" name="tag3" style="width: 100px;"/>
    </li>	
    <li>
        <input type="submit" value="post" />
    </li>
</ul>
</form>
            
            

        </div>
    </body>

</html>