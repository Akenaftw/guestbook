<?php

// handles a single post
class Post
{
    private string $title;
private DateTimeImmutable $date;
private string $content;
private string $author;

    /**
     * Post constructor.
     * @param string $title
     * @param DateTimeImmutable $date
     * @param string $content
     * @param string $author
     */
    public function __construct(string $title, DateTimeImmutable $date, string $content, string $author)
    {
        $this->title = $title;
        $this->date = $date;
        $this->content = $content;
        $this->author = $author;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return DateTimeImmutable
     */
    public function getDate(): DateTimeImmutable
    {
        return $this->date;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @return string
     */
    public function getAuthor(): string
    {
        return $this->author;
    }
}