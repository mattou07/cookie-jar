<?php

namespace WiseBiscuit\CookieJar;

/**
 * Class Page
 * @package WiseBiscuit\CookieJar
 */
class Page
{
    const DEFAULT_ID = 'noid';
    const DEFAULT_CATEGORY = 'default';
    const DEFAULT_TITLE = 'Cookie Jar App';

    /**
     * @var string
     */
    private $id;
    /**
     * @var string
     */
    private $category;
    /**
     * @var string
     */
    private $title;
    /**
     * @var int
     */
    private $dir_level;
    /**
     * @var int
     */
    private $user_level;

    /**
     * @param string $id
     * @param string $category
     * @param string $title
     */
    public function __construct($id = self::DEFAULT_ID, $category = self::DEFAULT_CATEGORY, $title = self::DEFAULT_TITLE)
    {
        $this->id = $id;
        $this->category = $category;
        $this->title = $title;
    }
}