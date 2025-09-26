<?php
// Form.php
// Pastikan file ini dimulai dengan <?php (bukan <? )

class Form {
    private $action;
    private $method;

    public function __construct($action = "", $method = "POST") {
        $this->action = $action;
        $this->method = strtoupper($method);
    }

    public function open($attrs = "") {
        $action = htmlspecialchars($this->action, ENT_QUOTES);
        return "<form action='{$action}' method='{$this->method}' {$attrs}>";
    }

    public function close() {
        return "</form>";
    }

    public function inputText($name, $label = "", $value = "") {
        $v = htmlspecialchars($value, ENT_QUOTES);
        return "<label>{$label}</label><br><input type='text' name='{$name}' value='{$v}'><br><br>";
    }

    public function inputPassword($name, $label = "") {
        return "<label>{$label}</label><br><input type='password' name='{$name}'><br><br>";
    }

    public function inputRadio($name, $options = []) {
        $html = "<label>{$name}</label><br>";
        foreach ($options as $value => $label) {
            $html .= "<input type='radio' name='{$name}' value='".htmlspecialchars($value, ENT_QUOTES)."'> {$label} ";
        }
        return $html . "<br><br>";
    }

    public function inputCheckbox($name, $options = []) {
        $html = "<label>{$name}</label><br>";
        foreach ($options as $value => $label) {
            $html .= "<input type='checkbox' name='{$name}[]' value='".htmlspecialchars($value, ENT_QUOTES)."'> {$label} ";
        }
        return $html . "<br><br>";
    }

    public function select($name, $options = []) {
        $html = "<label>{$name}</label><br><select name='{$name}'>";
        foreach ($options as $value => $label) {
            $html .= "<option value='".htmlspecialchars($value, ENT_QUOTES)."'>{$label}</option>";
        }
        $html .= "</select><br><br>";
        return $html;
    }

    public function textarea($name, $label = "", $content = "") {
        $c = htmlspecialchars($content, ENT_QUOTES);
        return "<label>{$label}</label><br><textarea name='{$name}'>{$c}</textarea><br><br>";
    }

    public function submit($label = "Submit") {
        return "<button type='submit'>{$label}</button>";
    }
}
