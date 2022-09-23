<?php

namespace App\Session\Admin;

class Login{

    /**
     * MÉTODO RESPONSÁVEL POR INICIAR A SESSÃO
     */
    private static function init(){
        //VERIFICA SE A SESSÃO NÃO ESTÁ ATIVA
        if(session_status() != PHP_SESSION_ACTIVE){
            session_start();
        }
    }

    /**
     * MÉTODO RESPONSÁVEL POR CRIAR O LOGIN DO USUÁRIO
     * @param User $obUser
     * @return boolean
     */
    public static function login($obUser, $token){
        //INICIA A SESSÃO
        self::init();

        //DEFINE A SESSÃO DO USUÁRIO
        $_SESSION['admin']['usuario'] = [
            'id' => $obUser->id,
            'nome' => $obUser->nome,
            'email' => $obUser->email,
            'token' => $token
        ];

        //SECESSO
        return true;
    }

    /**
     * MÉTODO RESPONSÁVEL POR VERIFICAR SE O USUÁRIO ESTÁ LOGADO
     * @return boolean
     */
    public static function isLogged(){
        //INICIA A SESSÃO
        self::init();

        //RETORNA A VERIFICAÇÃO
        return isset($_SESSION['admin']['usuario']['id']);
    }

    /**
     * MÉTODO RESPONSÁVEL POR EXECUTAR O LOGOUT DO USUÁRIO
     * @return boolean
     */
    public static function logout(){
        //INICIA A SESSÃO
        self::init();

        //DESLOGA O USUÁRIO
        unset($_SESSION['admin']['usuario']);

        //SUCESSO
        return true;
    }
}