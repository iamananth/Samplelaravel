<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>My project</title>
        <style>
            #header{
            background-color: aquamarine;
            padding: 24px;
            }

            #navbar{
                background-color: burlywood;
                padding: 8px;
            }
            #main-section{
                background-color: lightgray;
                padding: 24px;
            }
            #section{
                background-color: lightsteelblue;
                padding: 16px;
            }

            .article{
                background-color: lightskyblue;
                padding: 16px;
                margin-top: 16px;
                margin-bottom: 16px;
            }

            #footer{
                text-align: center;
                background-color: lightskyblue;
                font-size: 24px;
                
            }
        </style>
        
    </head>
    <body style="margin: 0px;">
        <header id="header">
            <nav id="navbar">
                <a href="about"><span>about</span></a>
                <a href="contact"><span>Contact</span></a>
            </nav>
        </header>
        <h1>Hello</h1>
        @yield("title")
    </body>
</html>