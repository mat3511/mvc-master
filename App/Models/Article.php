<?php

namespace App\Models;

use App\Core\Model;

class Article extends Model
{
    protected $id;
    protected $title;
    protected $header;
    protected $text;

    /**
     * Article constructor.
     * @param $header
     * @param $title
     * @param $text
     */
    public function __construct($title = "", $header = "", $text = "")
    {
        $this->title = $title;
        $this->header = $header;
        $this->text = $text;
    }

    /**
     * @return mixed
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * @param mixed $header
     */
    public function setHeader($header)
    {
        $this->header = $header;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param mixed $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }

    static public function setDbColumns()
    {
       return ['id','title', 'header','text'];
    }

    static public function setTableName()
    {
        return 'articles';
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }
}