<?php

class SimpleCipher
{
    public string $key;
    private $alphabet;
    private int $alphabetLength;
    public function __construct(string $key = null)
    {
        if ($key !== null && preg_match("/^[a-z]+$/", $key) == 0) {
            throw new InvalidArgumentException('Invalid Key');
        }
        $this->alphabet = range('a', 'z');
        $this->alphabetLength = count($this->alphabet);
        $this->key = $key ?? $this->getRandomKey();
    }
    public function encode(string $data): string
    {
        return $this->convert($data, false);
    }
    public function decode(string $data): string
    {
        return $this->convert($data, true);
    }
    public function convert(string $value, bool $isDecode): string
    {
        $result = '';
        $direction = $isDecode ? -1 : 1;
        for ($i = 0; $i < strlen($value); $i++) {
            $valIndex = $this->indexOf($value[$i]);
            $keyIndex = $this->indexOf($this->key[$i]);
            $position = $valIndex + ($keyIndex * $direction);
            $result .= $this->valueOf($position);
        }
        return $result;
    }
    private function indexOf(string $character): int
    {
        return array_search($character, $this->alphabet);
    }
    private function valueOf(int $index): string
    {
        $position = $index;
        if ($index < 0) {
            $position = $index + $this->alphabetLength;
        }
        if ($index > $this->alphabetLength - 1) {
            $position = $index - $this->alphabetLength;
        }
        return $this->alphabet[$position];
    }
    public function getRandomKey(): string
    {
        $result = '';
        for ($i = 0; $i <= 100; $i++) {
            $index = rand(0, count($this->alphabet) - 1);
            $result .= $this->alphabet[$index];
        }
        return $result;
    }
}
