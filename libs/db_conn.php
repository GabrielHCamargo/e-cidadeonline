<?
/*
 *     E-cidade Software Publico para Gestao Municipal                
 *  Copyright (C) 2013  DBselller Servicos de Informatica             
 *                            www.dbseller.com.br                     
 *                         e-cidade@dbseller.com.br                   
 *                                                                    
 *  Este programa e software livre; voce pode redistribui-lo e/ou     
 *  modifica-lo sob os termos da Licenca Publica Geral GNU, conforme  
 *  publicada pela Free Software Foundation; tanto a versao 2 da      
 *  Licenca como (a seu criterio) qualquer versao mais nova.          
 *                                                                    
 *  Este programa e distribuido na expectativa de ser util, mas SEM   
 *  QUALQUER GARANTIA; sem mesmo a garantia implicita de              
 *  COMERCIALIZACAO ou de ADEQUACAO A QUALQUER PROPOSITO EM           
 *  PARTICULAR. Consulte a Licenca Publica Geral GNU para obter mais  
 *  detalhes.                                                         
 *                                                                    
 *  Voce deve ter recebido uma copia da Licenca Publica Geral GNU     
 *  junto com este programa; se nao, escreva para a Free Software     
 *  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA          
 *  02111-1307, USA.                                                  
 *  
 *  Copia da licenca no diretorio licenca/licenca_en.txt 
 *                                licenca/licenca_pt.txt 
 */

if (!function_exists('session_register')) {
    function session_register(...$args) {
        foreach ($args as $key) {
            if (!isset($_SESSION[$key])) {
                $_SESSION[$key] = $GLOBALS[$key] ?? null;
            }
        }
    }
    function session_is_registered($key) { return isset($_SESSION[$key]); }
    function session_unregister($key) { unset($_SESSION[$key]); }
}

if (!function_exists('split')) {
    function split($pattern, $string, $limit = -1) {
        return mb_split($pattern, $string, $limit);
    }
}
if (!function_exists('ereg')) {
    function ereg($pattern, $string, &$regs = null) {
        return preg_match('/' . addcslashes($pattern, '/') . '/', $string, $regs);
    }
}
if (!function_exists('eregi')) {
    function eregi($pattern, $string, &$regs = null) {
        return preg_match('/' . addcslashes($pattern, '/') . '/i', $string, $regs);
    }
}
if (!function_exists('ereg_replace')) {
    function ereg_replace($pattern, $replacement, $string) {
        return preg_replace('/' . addcslashes($pattern, '/') . '/', $replacement, $string);
    }
}
if (!function_exists('eregi_replace')) {
    function eregi_replace($pattern, $replacement, $string) {
        return preg_replace('/' . addcslashes($pattern, '/') . '/i', $replacement, $string);
    }
}

$GLOBALS['HTTP_POST_VARS'] = &$_POST;
$GLOBALS['HTTP_GET_VARS'] = &$_GET;
$GLOBALS['HTTP_SERVER_VARS'] = &$_SERVER;
$GLOBALS['HTTP_ENV_VARS'] = &$_ENV;
$GLOBALS['HTTP_COOKIE_VARS'] = &$_COOKIE;
global $HTTP_POST_VARS, $HTTP_GET_VARS, $HTTP_SERVER_VARS, $HTTP_ENV_VARS, $HTTP_COOKIE_VARS;
$HTTP_POST_VARS = &$_POST;
$HTTP_GET_VARS = &$_GET;
$HTTP_SERVER_VARS = &$_SERVER;
$HTTP_ENV_VARS = &$_ENV;
$HTTP_COOKIE_VARS = &$_COOKIE;

$DB_INSTITUICAO = 1;
$DB_SERVIDOR = getenv('DB_HOST') ?: (getenv('DB_PORTAL_HOST') ?: "postgres_dbportal");
$DB_BASEDADOS = getenv('DB_DATABASE') ?: "dbportal";
$DB_USUARIO = getenv('DB_USER') ?: "ecidade";
$DB_SENHA = getenv('DB_PASS') ?: "";
$DB_PORTA = getenv('DB_PORT') ?: "5432";
global $configsite;
$configsite = "1";
ini_set("error_reporting","E_ALL & ~NOTICE");
ini_set("default_charset", "ISO-8859-1");
?>
