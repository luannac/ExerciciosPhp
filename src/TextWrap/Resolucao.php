<?php

namespace Galoa\ExerciciosPhp\TextWrap;

/**
 * Implemente sua resolução aqui.
 */
class Resolucao implements TextWrapInterface {

  /**
   * {@inheritdoc}
   */
  public function textWrap(string $text, int $length): array {
       // Case string empty, return array empty.
       if (empty($text)) {
        return [''];
      }
      else {
        // Regex to filter break line.
        $search = '/(.{1,' . $length . '})(?:\s|$)|(.{' . $length . '})/uS';
        // Replacement for add tag '$' in regex.
        $replace = '$1$2' . '$';
        // Break by char '$' in regex.
        $array = explode('$', preg_replace($search, $replace, $text));
        // Remove the last empty position in the array.
        array_pop($array);
        return $array;
      }
  
  }
}
