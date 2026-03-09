<?php

/**
 * Classe responsável por manipulações de strings, como conversão para formato "slug" e truncamento.
 */
class StringHelper
{

    /**
     * Converte uma string em um formato "slug", substituindo caracteres não permitidos por hífens.
     * 
     * @param mixed $text A string a ser convertida em slug.
     * @return mixed A string formatada como slug.
     */
    public function slugify($text)
    {
        $text = strtolower($text);
        $text = preg_replace('/[^a-z0-9]+/', '-', $text);
        return trim($text, '-');
    }

    /**
     * Trunca uma string para um limite especificado e adiciona reticências se necessário.
     * 
     * @param mixed $text O texto a ser truncado.
     * @param mixed $limit O limite de caracteres para truncar o texto.
     * @return mixed A string truncada ou o texto original se o limite não for excedido.
     */
    public function truncate($text, $limit)
    {
        if (strlen($text) <= $limit) {
            return $text;
        }

        return substr($text, 0, $limit) . "...";
    }

}