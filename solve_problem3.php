<?php
class TextInput
{
    public $input;
    
    public function add($text)
    {
        $this->input .= $text;
    }
    
    public function getValue()
    {
        return strval($this->input);
    }
}

class NumericInput extends TextInput
{
    public function add($text)
    {
        $len = strlen($text);
        $textCd = ord($text);
        $isNumber = $textCd >= 48 && $textCd <= 57;
        if ($isNumber) {
            $this->input .= $text;
        } else {
            $this->input .= '';
        }
    }
}

$input = new NumericInput();
$input->add('a');
$input->add('b');
$input->add('2');
echo $input->getValue();
