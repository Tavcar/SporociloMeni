<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Merriweather" />
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet"> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Obrazec za sporočilo</title>
        
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/assets/css/style.css">
    
</head>
<body>
    <div class="container-fluid">

        <div class="row">
            <div class="col-xs-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2" id="panel">
                                
                <div class="col-xs-12" id="top">
                    <div class="col-xs-11" id="title">
                        <p class="title-1">Predlagajte temo ali postavite vprašanje.</p>
                    </div>
                    
                    <div class="col-xs-1" id="exit">
                        <button class="close">
                            <div id="exitl">
                                <div id="exitr">
                                </div>
                            </div>
                        </button>
                    </div>

                </div>
                
                <div class="col-xs-6" id="left">
                    <p class="text">Lorizzle ipsum pimpin’ sheezy amizzle, brizzle adipiscing yo. Nullizzle pot velizzle, shizzle my nizzle crocodizzle break it down, suscipit bling bling, sure vizzle, arcu. 
                    <br><br>
                    Fo shizzle tortizzle. Sed erizzle. Pimpin’ izzle shizzlin dizzle dapibus turpis tempizzle bling bling.</p>
                </div>

                <div class="col-xs-6" id="right">
                    
                    <form method="POST" action="confirmation">
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" id="name" placeholder="Vaše ime..." required>
                        </div>
                        
                        <div class="form-group">
                            <input type="text" class="form-control" name="email" id="email" placeholder="Vaš email..." required>
                        </div>
                        
                        <div class="form-group">
                            <textarea class="form-control" name="message" id="message" rows="12" placeholder="Vaše sporočilo..." required></textarea>
                        </div>
                        
                        <button type="submit" class="btn btn-primary" id="button">Pošlji sporočilo</button>
                    </form>

                </div>
                
            </div>
        </div>
        
    </div>
</body>
</html>