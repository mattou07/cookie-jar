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
     * @var int
     */

    private $user_level;

    /**
     * @var Profile
     */

    private $profile;

    /**
     * @param int $id
     * @param string $username
     * @param int $user_level
     */

    public function __construct($id, $username, $user_level= User::ACCOUNT_GUEST)
    {
        $this ->id = $id;
        $this ->username = $username;
        $this ->user_level = $user_level;

    }

}