<?php namespace Sypress\ContentType;

/**
 * Sypress Content Type
 *
 * Defines a content type that is used in Sypress.
 *
 * @author Josiah <josiah@jjs.id.au>
 */
class ContentType implements ContentTypeInterface
{
    /**
     * Alias
     * 
     * @var string
     */
    protected $alias;

    /**
     * @param string $alias Alias
     */
    public function __construct($alias)
    {
        $this->alias = $alias;
    }

    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * Noun
     * 
     * @var string
     */
    protected $noun;
    
        /**
         * Sets the noun used for this content type
         * 
         * @return string
         */
        public function getNoun()
        {
            return $this->noun;
        }
    
        /**
         * Gets the noun used for this content type
         *
         * @param string $noun Noun
         *
         * @return $this
         */
        public function setNoun($noun)
        {
            $this->noun = (string) $noun;
    
            return $this;
        }

    /**
     * Plural
     * 
     * @var string
     */
    protected $plural;
    
        /**
         * Sets the plural used for this content type
         * 
         * @return string
         */
        public function getPlural()
        {
            return $this->plural;
        }
    
        /**
         * Gets the plural used for this content type
         *
         * @param string $plural Plural
         *
         * @return $this
         */
        public function setPlural($plural)
        {
            $this->plural = (string) $plural;
    
            return $this;
        }

    /**
     * Content Type description
     * 
     * @var string
     */
    protected $description;
    
        /**
         * Sets the description of this content type
         * 
         * @return string
         */
        public function getDescription()
        {
            return $this->description;
        }
    
        /**
         * Gets the description of this content type
         *
         * @param string $description Content Type description
         *
         * @return $this
         */
        public function setDescription($description)
        {
            $this->description = (string) $description;
    
            return $this;
        }

    /**
     * Indicates whether this content type is hidden
     * 
     * @var bool
     */
    protected $hidden = false;
    
        /**
         * Sets the indicator of whether this content type is hidden
         *
         * @param bool $hidden Indicates whether this content type is hidden
         * @return $this
         */
        public function setHidden($hidden)
        {
            $this->hidden = (bool) $hidden;
    
            return $this;
        }

    public function isHidden()
    {
        return $this->hidden;
    }

    /**
     * Menu Position
     * 
     * @var int
     */
    protected $menuPosition;
    
        /**
         * Sets the menu position
         * 
         * @return int
         */
        public function getMenuPosition()
        {
            return $this->menuPosition;
        }
    
        /**
         * Gets the menu position
         *
         * @param int $menuPosition Menu Position
         *
         * @return $this
         */
        public function setMenuPosition($menuPosition)
        {
            $this->menuPosition = $menuPosition;
    
            return $this;
        }
}
