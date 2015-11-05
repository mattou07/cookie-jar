<?php

namespace WiseBiscuit\CookieJar;

/**
 * Class User
 * @package WiseBiscuit\CookieJar
 */
class User {

    const ACCOUNT_GUEST = 0;
    const ACCOUNT_USER = 1;
    const ACCOUNT_ADMIN = 2;

    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    public $username;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */

    public $surname;

    /**
     * @var int
     */

    private $user_level;

    /**
     * @param int $id
     * @param string $username
     * @param string $name
     * @param string $surname
     * @param int $user_level
     */

    public function __construct($id, $username, $name, $surname, $user_level= User::ACCOUNT_USER)
    {
        $this ->id = $id;
        $this ->username = $username;
        $this ->name = $name;
        $this ->surnname = $surnname;
        $this ->user_level = $user_level;

    }

}