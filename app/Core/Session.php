<?php

namespace App\Core;

class Session
{
    public function __construct()
    {
        if (!session_id()) {
            session_start();
        }
    }

    /**
     * @param $name
     * @return void
     */
    public function __get($name)
    {
        if (!empty($_SESSION[$name])) {
            return $_SESSION[$name];
        }
        return null;
    }

    /**
     * @param $name
     * @return boolean
     */
    public function __isset($name): bool
    {
        return $this->has($name);
    }

    /**
     * Obter a sessão
     *
     * @return object|null
     */
    public function all(): ?object
    {
        return (object)$_SESSION;
    }

    /**
     * Add índice na sessão
     * @param string $key
     * @param mixed $value
     * @return Session
     */
    public function set(string $key, $value): Session
    {
        $_SESSION[$key] = (is_array($value) ? (object)$value : $value);
        return $this;
    }

    /**
     * Remover índice da sessão
     *
     * @param string $key
     * @return Session
     */
    public function unset(string $key): Session
    {
        unset($_SESSION[$key]);
        return $this;
    }

    /**
     * Verificar se existe o índice na sessão
     *
     * @param string $key
     * @return boolean
     */
    public function has(string $key): bool
    {
        return isset($_SESSION[$key]);
    }

    /**
     * Quando executar o método, irá regenerar a sessão trocando o id,
     * e deletar o arquivo antigo
     *
     * @return Session
     */
    public function regenerate(): Session
    {
        session_regenerate_id(true);
        return $this;
    }

    /**
     * Destruir a sessão
     *
     * @return Session
     */
    public function destroy(): Session
    {
        session_destroy();
        return $this;
    }

    /**
     * Monitorar/Elimina/Exibe a mensagem
     *
     * @return Message|null
     */
    public function flash(): ?Message
    {
        if ($this->has("flash")) {
            $flash = $this->flash;
            $this->unset("flash");
            return $flash;
        }
        return null;
    }
}
