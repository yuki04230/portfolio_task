{"filter":false,"title":"PostController.php","tooltip":"/blog/app/Http/Controllers/PostController.php","undoManager":{"mark":76,"position":76,"stack":[[{"start":{"row":8,"column":6},"end":{"row":9,"column":0},"action":"insert","lines":["",""],"id":61},{"start":{"row":9,"column":0},"end":{"row":9,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":9,"column":4},"end":{"row":12,"column":1},"action":"insert","lines":["public function index(Post $post)","{","    return $post->get();","}"],"id":62}],[{"start":{"row":12,"column":0},"end":{"row":12,"column":4},"action":"insert","lines":["    "],"id":63}],[{"start":{"row":10,"column":0},"end":{"row":10,"column":4},"action":"insert","lines":["    "],"id":64}],[{"start":{"row":11,"column":4},"end":{"row":11,"column":8},"action":"insert","lines":["    "],"id":65}],[{"start":{"row":3,"column":0},"end":{"row":4,"column":0},"action":"insert","lines":["",""],"id":66},{"start":{"row":4,"column":0},"end":{"row":4,"column":1},"action":"insert","lines":["u"]},{"start":{"row":4,"column":1},"end":{"row":4,"column":2},"action":"insert","lines":["s"]},{"start":{"row":4,"column":2},"end":{"row":4,"column":3},"action":"insert","lines":["e"]}],[{"start":{"row":4,"column":3},"end":{"row":4,"column":4},"action":"insert","lines":[" "],"id":67},{"start":{"row":4,"column":4},"end":{"row":4,"column":5},"action":"insert","lines":["A"]},{"start":{"row":4,"column":5},"end":{"row":4,"column":6},"action":"insert","lines":["p"]},{"start":{"row":4,"column":6},"end":{"row":4,"column":7},"action":"insert","lines":["p"]},{"start":{"row":4,"column":7},"end":{"row":4,"column":8},"action":"insert","lines":["/"]},{"start":{"row":4,"column":8},"end":{"row":4,"column":9},"action":"insert","lines":["P"]},{"start":{"row":4,"column":9},"end":{"row":4,"column":10},"action":"insert","lines":["o"]},{"start":{"row":4,"column":10},"end":{"row":4,"column":11},"action":"insert","lines":["s"]},{"start":{"row":4,"column":11},"end":{"row":4,"column":12},"action":"insert","lines":["t"]}],[{"start":{"row":4,"column":12},"end":{"row":4,"column":13},"action":"insert","lines":[";"],"id":68}],[{"start":{"row":4,"column":7},"end":{"row":4,"column":8},"action":"remove","lines":["/"],"id":69}],[{"start":{"row":4,"column":7},"end":{"row":4,"column":8},"action":"insert","lines":["\\"],"id":70}],[{"start":{"row":9,"column":5},"end":{"row":9,"column":6},"action":"remove","lines":["/"],"id":71},{"start":{"row":9,"column":4},"end":{"row":9,"column":5},"action":"remove","lines":["/"]},{"start":{"row":9,"column":0},"end":{"row":9,"column":4},"action":"remove","lines":["    "]}],[{"start":{"row":9,"column":0},"end":{"row":14,"column":3},"action":"insert","lines":["/**"," * Post一覧を表示する"," * "," * @param Post Postモデル"," * @return array Postモデルリスト"," */"],"id":72}],[{"start":{"row":9,"column":0},"end":{"row":14,"column":3},"action":"remove","lines":["/**"," * Post一覧を表示する"," * "," * @param Post Postモデル"," * @return array Postモデルリスト"," */"],"id":73},{"start":{"row":8,"column":1},"end":{"row":9,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":10,"column":5},"end":{"row":11,"column":0},"action":"insert","lines":["",""],"id":74},{"start":{"row":11,"column":0},"end":{"row":11,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":11,"column":4},"end":{"row":11,"column":8},"action":"remove","lines":["    "],"id":75}],[{"start":{"row":11,"column":4},"end":{"row":11,"column":5},"action":"insert","lines":["r"],"id":76},{"start":{"row":11,"column":5},"end":{"row":11,"column":6},"action":"insert","lines":["e"]},{"start":{"row":11,"column":6},"end":{"row":11,"column":7},"action":"insert","lines":["t"]},{"start":{"row":11,"column":7},"end":{"row":11,"column":8},"action":"insert","lines":["u"]},{"start":{"row":11,"column":8},"end":{"row":11,"column":9},"action":"insert","lines":["r"]},{"start":{"row":11,"column":9},"end":{"row":11,"column":10},"action":"insert","lines":["n"]}],[{"start":{"row":11,"column":10},"end":{"row":11,"column":11},"action":"insert","lines":[" "],"id":77},{"start":{"row":11,"column":11},"end":{"row":11,"column":12},"action":"insert","lines":["a"]},{"start":{"row":11,"column":12},"end":{"row":11,"column":13},"action":"insert","lines":[";"]}],[{"start":{"row":11,"column":11},"end":{"row":11,"column":12},"action":"remove","lines":["a"],"id":78}],[{"start":{"row":11,"column":11},"end":{"row":11,"column":13},"action":"insert","lines":["\"\""],"id":79}],[{"start":{"row":11,"column":12},"end":{"row":11,"column":13},"action":"insert","lines":["a"],"id":80}],[{"start":{"row":12,"column":8},"end":{"row":12,"column":11},"action":"insert","lines":["// "],"id":81}],[{"start":{"row":0,"column":0},"end":{"row":15,"column":0},"action":"remove","lines":["<?php","","namespace App\\Http\\Controllers;","","use App\\Post;","use Illuminate\\Http\\Request;","","class PostController extends Controller","{","    public function index(Post $post)","    {","    return \"a\";","        // return $post->get();","    }","}",""],"id":82},{"start":{"row":0,"column":0},"end":{"row":14,"column":2},"action":"insert","lines":["<?php","","namespace App\\Http\\Controllers;","","use App\\Post;","use Illuminate\\Http\\Request;","","class PostController extends Controller","{","    public function index(Post $post)","    {","        return view('posts/index')->with(['posts' => $post->get()]);  ","    }","}","?>"]}],[{"start":{"row":11,"column":26},"end":{"row":11,"column":27},"action":"remove","lines":["/"],"id":83},{"start":{"row":11,"column":25},"end":{"row":11,"column":26},"action":"remove","lines":["s"]},{"start":{"row":11,"column":24},"end":{"row":11,"column":25},"action":"remove","lines":["t"]},{"start":{"row":11,"column":23},"end":{"row":11,"column":24},"action":"remove","lines":["s"]},{"start":{"row":11,"column":22},"end":{"row":11,"column":23},"action":"remove","lines":["o"]},{"start":{"row":11,"column":21},"end":{"row":11,"column":22},"action":"remove","lines":["p"]}],[{"start":{"row":10,"column":5},"end":{"row":11,"column":0},"action":"insert","lines":["",""],"id":84},{"start":{"row":11,"column":0},"end":{"row":11,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":12,"column":8},"end":{"row":12,"column":11},"action":"insert","lines":["// "],"id":85}],[{"start":{"row":11,"column":8},"end":{"row":11,"column":9},"action":"insert","lines":["r"],"id":86},{"start":{"row":11,"column":9},"end":{"row":11,"column":10},"action":"insert","lines":["e"]},{"start":{"row":11,"column":10},"end":{"row":11,"column":11},"action":"insert","lines":["t"]},{"start":{"row":11,"column":11},"end":{"row":11,"column":12},"action":"insert","lines":["u"]},{"start":{"row":11,"column":12},"end":{"row":11,"column":13},"action":"insert","lines":["r"]},{"start":{"row":11,"column":13},"end":{"row":11,"column":14},"action":"insert","lines":["n"]}],[{"start":{"row":11,"column":14},"end":{"row":11,"column":15},"action":"insert","lines":[" "],"id":87},{"start":{"row":11,"column":15},"end":{"row":11,"column":16},"action":"insert","lines":["$"]},{"start":{"row":11,"column":16},"end":{"row":11,"column":17},"action":"insert","lines":["p"]},{"start":{"row":11,"column":17},"end":{"row":11,"column":18},"action":"insert","lines":["o"]},{"start":{"row":11,"column":18},"end":{"row":11,"column":19},"action":"insert","lines":["s"]}],[{"start":{"row":11,"column":19},"end":{"row":11,"column":20},"action":"insert","lines":["t"],"id":88},{"start":{"row":11,"column":20},"end":{"row":11,"column":21},"action":"insert","lines":["s"]}],[{"start":{"row":11,"column":20},"end":{"row":11,"column":21},"action":"remove","lines":["s"],"id":89}],[{"start":{"row":11,"column":20},"end":{"row":11,"column":21},"action":"insert","lines":[";"],"id":90}],[{"start":{"row":11,"column":0},"end":{"row":11,"column":21},"action":"remove","lines":["        return $post;"],"id":91},{"start":{"row":10,"column":5},"end":{"row":11,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":11,"column":8},"end":{"row":11,"column":11},"action":"remove","lines":["// "],"id":92}],[{"start":{"row":9,"column":4},"end":{"row":9,"column":7},"action":"insert","lines":["// "],"id":93},{"start":{"row":10,"column":4},"end":{"row":10,"column":7},"action":"insert","lines":["// "]},{"start":{"row":11,"column":4},"end":{"row":11,"column":7},"action":"insert","lines":["// "]},{"start":{"row":12,"column":4},"end":{"row":12,"column":7},"action":"insert","lines":["// "]}],[{"start":{"row":12,"column":8},"end":{"row":13,"column":0},"action":"insert","lines":["",""],"id":94},{"start":{"row":13,"column":0},"end":{"row":13,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":13,"column":4},"end":{"row":16,"column":1},"action":"insert","lines":["public function index(Post $post)","{","    return view('posts/index')->with(['posts' => $post->getByLimit()]);","}"],"id":95}],[{"start":{"row":14,"column":0},"end":{"row":14,"column":4},"action":"insert","lines":["    "],"id":96},{"start":{"row":15,"column":0},"end":{"row":15,"column":4},"action":"insert","lines":["    "]},{"start":{"row":16,"column":0},"end":{"row":16,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":15,"column":26},"end":{"row":15,"column":27},"action":"remove","lines":["/"],"id":97},{"start":{"row":15,"column":25},"end":{"row":15,"column":26},"action":"remove","lines":["s"]},{"start":{"row":15,"column":24},"end":{"row":15,"column":25},"action":"remove","lines":["t"]},{"start":{"row":15,"column":23},"end":{"row":15,"column":24},"action":"remove","lines":["s"]},{"start":{"row":15,"column":22},"end":{"row":15,"column":23},"action":"remove","lines":["o"]},{"start":{"row":15,"column":21},"end":{"row":15,"column":22},"action":"remove","lines":["p"]}],[{"start":{"row":15,"column":8},"end":{"row":15,"column":69},"action":"remove","lines":["return view('index')->with(['posts' => $post->getByLimit()]);"],"id":98},{"start":{"row":15,"column":8},"end":{"row":15,"column":84},"action":"insert","lines":[" return view('posts/index')->with(['posts' => $post->getPaginateByLimit()]);"]}],[{"start":{"row":15,"column":27},"end":{"row":15,"column":28},"action":"remove","lines":["/"],"id":99},{"start":{"row":15,"column":26},"end":{"row":15,"column":27},"action":"remove","lines":["s"]},{"start":{"row":15,"column":25},"end":{"row":15,"column":26},"action":"remove","lines":["t"]},{"start":{"row":15,"column":24},"end":{"row":15,"column":25},"action":"remove","lines":["s"]},{"start":{"row":15,"column":23},"end":{"row":15,"column":24},"action":"remove","lines":["o"]},{"start":{"row":15,"column":22},"end":{"row":15,"column":23},"action":"remove","lines":["p"]}],[{"start":{"row":16,"column":5},"end":{"row":17,"column":0},"action":"insert","lines":["",""],"id":101},{"start":{"row":17,"column":0},"end":{"row":17,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":17,"column":4},"end":{"row":20,"column":1},"action":"insert","lines":["public function show(Post $post)","{","    return view('posts/show')->with(['post' => $post]);","}"],"id":102}],[{"start":{"row":19,"column":22},"end":{"row":19,"column":23},"action":"remove","lines":["/"],"id":103},{"start":{"row":19,"column":21},"end":{"row":19,"column":22},"action":"remove","lines":["s"]},{"start":{"row":19,"column":20},"end":{"row":19,"column":21},"action":"remove","lines":["t"]},{"start":{"row":19,"column":19},"end":{"row":19,"column":20},"action":"remove","lines":["s"]},{"start":{"row":19,"column":18},"end":{"row":19,"column":19},"action":"remove","lines":["o"]},{"start":{"row":19,"column":17},"end":{"row":19,"column":18},"action":"remove","lines":["p"]}],[{"start":{"row":20,"column":1},"end":{"row":21,"column":0},"action":"insert","lines":["",""],"id":104}],[{"start":{"row":21,"column":0},"end":{"row":24,"column":1},"action":"insert","lines":["public function create()","{","    return view('posts/create');","}"],"id":105}],[{"start":{"row":23,"column":22},"end":{"row":23,"column":23},"action":"remove","lines":["/"],"id":106},{"start":{"row":23,"column":21},"end":{"row":23,"column":22},"action":"remove","lines":["s"]},{"start":{"row":23,"column":20},"end":{"row":23,"column":21},"action":"remove","lines":["t"]},{"start":{"row":23,"column":19},"end":{"row":23,"column":20},"action":"remove","lines":["s"]},{"start":{"row":23,"column":18},"end":{"row":23,"column":19},"action":"remove","lines":["o"]},{"start":{"row":23,"column":17},"end":{"row":23,"column":18},"action":"remove","lines":["p"]}],[{"start":{"row":21,"column":0},"end":{"row":21,"column":4},"action":"insert","lines":["    "],"id":107},{"start":{"row":22,"column":0},"end":{"row":22,"column":4},"action":"insert","lines":["    "]},{"start":{"row":23,"column":0},"end":{"row":23,"column":4},"action":"insert","lines":["    "]},{"start":{"row":24,"column":0},"end":{"row":24,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":22,"column":5},"end":{"row":23,"column":0},"action":"insert","lines":["",""],"id":108},{"start":{"row":23,"column":0},"end":{"row":23,"column":8},"action":"insert","lines":["        "]},{"start":{"row":23,"column":8},"end":{"row":23,"column":9},"action":"insert","lines":["r"]},{"start":{"row":23,"column":9},"end":{"row":23,"column":10},"action":"insert","lines":["e"]},{"start":{"row":23,"column":10},"end":{"row":23,"column":11},"action":"insert","lines":["t"]},{"start":{"row":23,"column":11},"end":{"row":23,"column":12},"action":"insert","lines":["u"]},{"start":{"row":23,"column":12},"end":{"row":23,"column":13},"action":"insert","lines":["r"]},{"start":{"row":23,"column":13},"end":{"row":23,"column":14},"action":"insert","lines":["n"]}],[{"start":{"row":23,"column":14},"end":{"row":23,"column":15},"action":"insert","lines":[" "],"id":109},{"start":{"row":23,"column":15},"end":{"row":23,"column":16},"action":"insert","lines":["a"]}],[{"start":{"row":23,"column":15},"end":{"row":23,"column":16},"action":"remove","lines":["a"],"id":110}],[{"start":{"row":23,"column":15},"end":{"row":23,"column":16},"action":"insert","lines":["1"],"id":111},{"start":{"row":23,"column":16},"end":{"row":23,"column":17},"action":"insert","lines":["1"]},{"start":{"row":23,"column":17},"end":{"row":23,"column":18},"action":"insert","lines":["1"]},{"start":{"row":23,"column":18},"end":{"row":23,"column":19},"action":"insert","lines":[";"]}],[{"start":{"row":23,"column":0},"end":{"row":23,"column":19},"action":"remove","lines":["        return 111;"],"id":112},{"start":{"row":22,"column":5},"end":{"row":23,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":22,"column":5},"end":{"row":23,"column":0},"action":"insert","lines":["",""],"id":113},{"start":{"row":23,"column":0},"end":{"row":23,"column":8},"action":"insert","lines":["        "]},{"start":{"row":23,"column":8},"end":{"row":23,"column":9},"action":"insert","lines":["r"]},{"start":{"row":23,"column":9},"end":{"row":23,"column":10},"action":"insert","lines":["e"]},{"start":{"row":23,"column":10},"end":{"row":23,"column":11},"action":"insert","lines":["t"]},{"start":{"row":23,"column":11},"end":{"row":23,"column":12},"action":"insert","lines":["u"]},{"start":{"row":23,"column":12},"end":{"row":23,"column":13},"action":"insert","lines":["r"]},{"start":{"row":23,"column":13},"end":{"row":23,"column":14},"action":"insert","lines":["n"]}],[{"start":{"row":23,"column":14},"end":{"row":23,"column":15},"action":"insert","lines":[" "],"id":114},{"start":{"row":23,"column":15},"end":{"row":23,"column":16},"action":"insert","lines":["1"]},{"start":{"row":23,"column":16},"end":{"row":23,"column":17},"action":"insert","lines":["1"]},{"start":{"row":23,"column":17},"end":{"row":23,"column":18},"action":"insert","lines":[";"]}],[{"start":{"row":23,"column":0},"end":{"row":23,"column":18},"action":"remove","lines":["        return 11;"],"id":116},{"start":{"row":22,"column":5},"end":{"row":23,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":18,"column":0},"end":{"row":18,"column":4},"action":"insert","lines":["    "],"id":117},{"start":{"row":19,"column":0},"end":{"row":19,"column":4},"action":"insert","lines":["    "]},{"start":{"row":20,"column":0},"end":{"row":20,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":24,"column":5},"end":{"row":25,"column":0},"action":"insert","lines":["",""],"id":118},{"start":{"row":25,"column":0},"end":{"row":25,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":25,"column":4},"end":{"row":30,"column":1},"action":"insert","lines":["public function store(Request $request, Post $post)","{","    $input = $request['post'];","    $post->fill($input)->save();","    return redirect('/posts/' . $post->id);","}"],"id":119}],[{"start":{"row":26,"column":1},"end":{"row":27,"column":0},"action":"insert","lines":["",""],"id":120},{"start":{"row":27,"column":0},"end":{"row":27,"column":4},"action":"insert","lines":["    "]},{"start":{"row":27,"column":4},"end":{"row":27,"column":5},"action":"insert","lines":["f"]}],[{"start":{"row":27,"column":4},"end":{"row":27,"column":5},"action":"remove","lines":["f"],"id":121}],[{"start":{"row":27,"column":4},"end":{"row":27,"column":5},"action":"insert","lines":["r"],"id":122},{"start":{"row":27,"column":5},"end":{"row":27,"column":6},"action":"insert","lines":["e"]},{"start":{"row":27,"column":6},"end":{"row":27,"column":7},"action":"insert","lines":["t"]},{"start":{"row":27,"column":7},"end":{"row":27,"column":8},"action":"insert","lines":["u"]},{"start":{"row":27,"column":8},"end":{"row":27,"column":9},"action":"insert","lines":["r"]},{"start":{"row":27,"column":9},"end":{"row":27,"column":10},"action":"insert","lines":["n"]}],[{"start":{"row":27,"column":10},"end":{"row":27,"column":11},"action":"insert","lines":[" "],"id":123},{"start":{"row":27,"column":11},"end":{"row":27,"column":12},"action":"insert","lines":["1"]},{"start":{"row":27,"column":12},"end":{"row":27,"column":13},"action":"insert","lines":["1"]},{"start":{"row":27,"column":13},"end":{"row":27,"column":14},"action":"insert","lines":["1"]},{"start":{"row":27,"column":14},"end":{"row":27,"column":15},"action":"insert","lines":[";"]}],[{"start":{"row":28,"column":4},"end":{"row":28,"column":7},"action":"insert","lines":["// "],"id":124},{"start":{"row":29,"column":4},"end":{"row":29,"column":7},"action":"insert","lines":["// "]},{"start":{"row":30,"column":4},"end":{"row":30,"column":7},"action":"insert","lines":["// "]}],[{"start":{"row":28,"column":4},"end":{"row":28,"column":7},"action":"remove","lines":["// "],"id":125},{"start":{"row":29,"column":4},"end":{"row":29,"column":7},"action":"remove","lines":["// "]},{"start":{"row":30,"column":4},"end":{"row":30,"column":7},"action":"remove","lines":["// "]}],[{"start":{"row":27,"column":0},"end":{"row":27,"column":15},"action":"remove","lines":["    return 111;"],"id":126},{"start":{"row":26,"column":1},"end":{"row":27,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":25,"column":0},"end":{"row":30,"column":1},"action":"remove","lines":["    public function store(Request $request, Post $post)","{","    $input = $request['post'];","    $post->fill($input)->save();","    return redirect('/posts/' . $post->id);","}"],"id":132},{"start":{"row":25,"column":0},"end":{"row":30,"column":5},"action":"insert","lines":["    public function store(Post $post, PostRequest $request) // 引数をRequest->PostRequestにする","    {","        $input = $request['post'];","        $post->fill($input)->save();","        return redirect('/posts/' . $post->id);","    }"]}],[{"start":{"row":5,"column":0},"end":{"row":5,"column":3},"action":"insert","lines":["// "],"id":133}],[{"start":{"row":5,"column":31},"end":{"row":6,"column":0},"action":"insert","lines":["",""],"id":134}],[{"start":{"row":6,"column":0},"end":{"row":6,"column":43},"action":"insert","lines":["use App\\Http\\Requests\\PostRequest; // useする"],"id":135}],[{"start":{"row":31,"column":5},"end":{"row":32,"column":0},"action":"insert","lines":["",""],"id":136},{"start":{"row":32,"column":0},"end":{"row":32,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":32,"column":4},"end":{"row":35,"column":1},"action":"insert","lines":["public function edit(Post $post)","{","    return view('posts/edit')->with(['post' => $post]);","}"],"id":137}],[{"start":{"row":34,"column":22},"end":{"row":34,"column":23},"action":"remove","lines":["/"],"id":138},{"start":{"row":34,"column":21},"end":{"row":34,"column":22},"action":"remove","lines":["s"]},{"start":{"row":34,"column":20},"end":{"row":34,"column":21},"action":"remove","lines":["t"]},{"start":{"row":34,"column":19},"end":{"row":34,"column":20},"action":"remove","lines":["s"]},{"start":{"row":34,"column":18},"end":{"row":34,"column":19},"action":"remove","lines":["o"]},{"start":{"row":34,"column":17},"end":{"row":34,"column":18},"action":"remove","lines":["p"]}],[{"start":{"row":35,"column":1},"end":{"row":36,"column":0},"action":"insert","lines":["",""],"id":139}],[{"start":{"row":35,"column":0},"end":{"row":37,"column":0},"action":"insert","lines":["","    ",""],"id":140}],[{"start":{"row":36,"column":0},"end":{"row":36,"column":4},"action":"remove","lines":["    "],"id":141},{"start":{"row":35,"column":0},"end":{"row":36,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":34,"column":49},"end":{"row":35,"column":0},"action":"remove","lines":["",""],"id":142}],[{"start":{"row":35,"column":1},"end":{"row":36,"column":0},"action":"insert","lines":["",""],"id":143}],[{"start":{"row":36,"column":0},"end":{"row":42,"column":1},"action":"insert","lines":["public function update(PostRequest $request, Post $post)","{","    $input_post = $request['post'];","    $post->fill($input_post)->save();","","    return redirect('/posts/' . $post->id);","}"],"id":144}]]},"ace":{"folds":[],"scrolltop":340,"scrollleft":0,"selection":{"start":{"row":42,"column":1},"end":{"row":42,"column":1},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":12,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1636873033996,"hash":"fe59276bbcfafead5bee38790a72616cf0923dde"}