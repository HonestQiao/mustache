<?php
namespace Mustache\Lexer;

/**
 * @package  Mustache
 * @license  MIT License <LICENSE>
 * @link     http://github.com/adlawson/mustache
 */
interface LexerInterface
{
    /**
     * Tokenize a template
     * 
     * @param string $template
     * 
     * @return TokenQueue
     */
    public function tokenize($template);

    /**
     * Set the tag delimiters
     * 
     * @param string $start
     * @param string $end
     */
    public function setDelimiters($start, $end);
}