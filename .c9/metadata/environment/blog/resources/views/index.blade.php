{"filter":false,"title":"index.blade.php","tooltip":"/blog/resources/views/index.blade.php","undoManager":{"mark":3,"position":3,"stack":[[{"start":{"row":0,"column":0},"end":{"row":17,"column":7},"action":"insert","lines":["<!DOCTYPE html>","<html lang=\"{{ str_replace('_', '-', app()->getLocale()) }}\">","    <head>","        <meta charset=\"utf-8\">","        <title>Blog</title>","        <!-- Fonts -->","        <link href=\"https://fonts.googleapis.com/css?family=Nunito:200,600\" rel=\"stylesheet\">","    </head>","    <body>","        <h1>Blog Name</h1>","        <div class='posts'>","            <div class='post'>","                <h2 class='title'>Title</h2>","                <p class='body'>This is a sample body.</p>","            </div>","        </div>","    </body>","</html>"],"id":1}],[{"start":{"row":0,"column":0},"end":{"row":17,"column":7},"action":"remove","lines":["<!DOCTYPE html>","<html lang=\"{{ str_replace('_', '-', app()->getLocale()) }}\">","    <head>","        <meta charset=\"utf-8\">","        <title>Blog</title>","        <!-- Fonts -->","        <link href=\"https://fonts.googleapis.com/css?family=Nunito:200,600\" rel=\"stylesheet\">","    </head>","    <body>","        <h1>Blog Name</h1>","        <div class='posts'>","            <div class='post'>","                <h2 class='title'>Title</h2>","                <p class='body'>This is a sample body.</p>","            </div>","        </div>","    </body>","</html>"],"id":2},{"start":{"row":0,"column":0},"end":{"row":19,"column":7},"action":"insert","lines":["<!DOCTYPE html>","<html lang=\"{{ str_replace('_', '-', app()->getLocale()) }}\">","    <head>","        <meta charset=\"utf-8\">","        <title>Blog</title>","        <!-- Fonts -->","        <link href=\"https://fonts.googleapis.com/css?family=Nunito:200,600\" rel=\"stylesheet\">","    </head>","    <body>","        <h1>Blog Name</h1>","        <div class='posts'>","            @foreach ($posts as $post)","                <div class='post'>","                    <h2 class='title'>{{ $post->title }}</h2>","                    <p class='body'>{{ $post->body }}</p>","                </div>","            @endforeach","        </div>","    </body>","</html>"]}],[{"start":{"row":11,"column":38},"end":{"row":12,"column":0},"action":"insert","lines":["",""],"id":3},{"start":{"row":12,"column":0},"end":{"row":12,"column":12},"action":"insert","lines":["            "]},{"start":{"row":12,"column":12},"end":{"row":12,"column":14},"action":"insert","lines":["ああ"]}],[{"start":{"row":0,"column":0},"end":{"row":20,"column":7},"action":"remove","lines":["<!DOCTYPE html>","<html lang=\"{{ str_replace('_', '-', app()->getLocale()) }}\">","    <head>","        <meta charset=\"utf-8\">","        <title>Blog</title>","        <!-- Fonts -->","        <link href=\"https://fonts.googleapis.com/css?family=Nunito:200,600\" rel=\"stylesheet\">","    </head>","    <body>","        <h1>Blog Name</h1>","        <div class='posts'>","            @foreach ($posts as $post)","            ああ","                <div class='post'>","                    <h2 class='title'>{{ $post->title }}</h2>","                    <p class='body'>{{ $post->body }}</p>","                </div>","            @endforeach","        </div>","    </body>","</html>"],"id":5},{"start":{"row":0,"column":0},"end":{"row":22,"column":7},"action":"insert","lines":["<!DOCTYPE html>","<html lang=\"{{ str_replace('_', '-', app()->getLocale()) }}\">","    <head>","        <meta charset=\"utf-8\">","        <title>Blog</title>","        <!-- Fonts -->","        <link href=\"https://fonts.googleapis.com/css?family=Nunito:200,600\" rel=\"stylesheet\">","    </head>","    <body>","        <h1>Blog Name</h1>","        <div class='posts'>","            @foreach ($posts as $post)","                <div class='post'>","                    <h2 class='title'>{{ $post->title }}</h2>","                    <p class='body'>{{ $post->body }}</p>","                </div>","            @endforeach","        </div>","        <div class='paginate'>","            {{ $posts->links() }}","        </div>","    </body>","</html>"]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":22,"column":7},"end":{"row":22,"column":7},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1636859488392,"hash":"759521521542fb7cbf12ab339709e9b7a9e66783"}