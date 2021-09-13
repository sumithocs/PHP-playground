
<?php

class TextInput
{
    protected $output = "";

    public function add($text)
    {

        $this->output = $this->output . $text;
    }

    public function getValue()
    {
        return $this->output;
    }
}

class NumericInput extends TextInput
{
    public function add($int)
    {
        if (is_numeric($int)) {
            $this->output = $this->output . $int;
        }
    }
}

$input = new NumericInput();
$input->add('1');
$input->add('a');
$input->add('0');
echo $input->getValue();
