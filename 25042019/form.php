<?

class Form 
{
    protected $action;
    protected $method;
    protected $inputTag = "";

    function __construct($method, $action)
    {
        $this->action = $action;
        $this->method = $method;
    }

    function attr_arr_to_str($attrNameArray)
    {
        $str = "";
        foreach ($attrNameArray as $k => $v) {
            $str .= " $k=\"$v\"";
        }
        return $str;
    }

    function add_input($attrNameArray)
    {
        $this->inputTag .= "\t<input" .$this->attr_arr_to_str($attrNameArray).">\n";
    }

    function addTextarea($attrNameArray, $text = null)
    {
        return  $this->inputTag .= "\t<textarea" .$this->attr_arr_to_str($attrNameArray).">$text</textarea>\n";
    }

    function addButton($attrNameArray, $text = null)
    {
        return  $this->inputTag .= "\t<button" .$this->attr_arr_to_str($attrNameArray).">$text</button>\n";
    }

    function addLabel($attrNameArray, $text = null)
    {
        $this->inputTag .= "\t<label" .$this->attr_arr_to_str($attrNameArray).">$text</label>\n";
    }

    function show_form()
    {
        return "<form method=\"$this->method\" action=\"$this->action\">\n$this->inputTag</form>";
    }
}
?>