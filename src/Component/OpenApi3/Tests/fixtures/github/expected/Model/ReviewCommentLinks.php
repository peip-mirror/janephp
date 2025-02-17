<?php

namespace Github\Model;

class ReviewCommentLinks extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Hypermedia Link
     *
     * @var Link
     */
    protected $self;
    /**
     * Hypermedia Link
     *
     * @var Link
     */
    protected $html;
    /**
     * Hypermedia Link
     *
     * @var Link
     */
    protected $pullRequest;
    /**
     * Hypermedia Link
     *
     * @return Link
     */
    public function getSelf() : Link
    {
        return $this->self;
    }
    /**
     * Hypermedia Link
     *
     * @param Link $self
     *
     * @return self
     */
    public function setSelf(Link $self) : self
    {
        $this->initialized['self'] = true;
        $this->self = $self;
        return $this;
    }
    /**
     * Hypermedia Link
     *
     * @return Link
     */
    public function getHtml() : Link
    {
        return $this->html;
    }
    /**
     * Hypermedia Link
     *
     * @param Link $html
     *
     * @return self
     */
    public function setHtml(Link $html) : self
    {
        $this->initialized['html'] = true;
        $this->html = $html;
        return $this;
    }
    /**
     * Hypermedia Link
     *
     * @return Link
     */
    public function getPullRequest() : Link
    {
        return $this->pullRequest;
    }
    /**
     * Hypermedia Link
     *
     * @param Link $pullRequest
     *
     * @return self
     */
    public function setPullRequest(Link $pullRequest) : self
    {
        $this->initialized['pullRequest'] = true;
        $this->pullRequest = $pullRequest;
        return $this;
    }
}