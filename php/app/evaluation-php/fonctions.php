<?php declare(strict_types=1);
/**
 * FICHIER A COMPLETER DANS LES ESPACES INDIQUES (ET PAS AILLEURS ! ! !)
 */
/**
 * AJOUTER LE CODE MANQUANT!
 */
 
function routingPage(Array $pGetRecieved):string
{
   /**
 * AJOUTER LE CODE MANQUANT!
 */
if ((isset($pGetRecieved['page']))&&($pGetRecieved['page']=='list'))
   return "list";
   if ((isset($pGetRecieved['page']))&&($pGetRecieved['page']=='details'))
   return "details";
return "home";
}

function getParamSearch(Array $pGetRecieved):string
{
  /**
 * AJOUTER LE CODE MANQUANT!
 */
if ((isset($pGetRecieved['nom'])))
   return strtoupper($pGetRecieved['nom']);
return '';
}
function getParamDetail(Array $pGetRecieved):string
{
   /**
 * AJOUTER LE CODE MANQUANT!
 */
if ((isset($pGetRecieved['id'])))
   return $pGetRecieved['id'];
return "";
}
function showPage(String $pTemplate, $data = [])
{
    /**
 * NE PAS TOUCHER LE CODE ICI
 */
    if (!file_exists($pTemplate))
        throw new ParseError('file not found');
    ob_start();
    include $pTemplate;
    return  ob_get_clean();
        /**
     * NE PAS TOUCHER LE CODE ICI
     */
}
