{"filter":false,"title":"PostRequest.php","tooltip":"/blog/app/Http/Requests/PostRequest.php","undoManager":{"mark":0,"position":0,"stack":[[{"start":{"row":0,"column":0},"end":{"row":30,"column":0},"action":"remove","lines":["<?php","","namespace App\\Http\\Requests;","","use Illuminate\\Foundation\\Http\\FormRequest;","","class PostRequest extends FormRequest","{","    /**","     * Determine if the user is authorized to make this request.","     *","     * @return bool","     */","    public function authorize()","    {","        return false;","    }","","    /**","     * Get the validation rules that apply to the request.","     *","     * @return array","     */","    public function rules()","    {","        return [","            //","        ];","    }","}",""],"id":5},{"start":{"row":0,"column":0},"end":{"row":15,"column":1},"action":"insert","lines":["<?php","","namespace App\\Http\\Requests;","","use Illuminate\\Foundation\\Http\\FormRequest;","","class PostRequest extends FormRequest","{","    public function rules()","    {","        return [","            'post.title' => 'required|string|max:100',","            'post.body' => 'required|string|max:4000',","        ];","    }","}"]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":15,"column":1},"end":{"row":15,"column":1},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":20,"mode":"ace/mode/php"}},"timestamp":1636871555251,"hash":"e0d76431eeebaf001b46a0946ed92e07377642e0"}