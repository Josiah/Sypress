<?php namespace Sypress\ContentType;

/**
 * Content Type Interface
 *
 * Implementation details for Sypress content types.
 *
 * @author Josiah <josiah@jjs.id.au>
 */
interface ContentTypeInterface
{
    /**
     * Gets the alias used to refer to this content type
     *
     * Max. 20 characters, can not contain capital letters or spaces
     * 
     * @return string
     */
    function getAlias();

    /**
     * Gets the name used for one object of this content type
     * 
     * @return string
     */
    function getNoun();

    /**
     * Gets the plural used for more than one object of this content type
     * 
     * @return string
     */
    function getPlural();

    /**
     * Gets the description of this content type
     * 
     * @return string
     */
    function getDescription();

    /**
     * Indicates whether this content type is hidden from users.
     * 
     * @return boolean TRUE if hidden; FALSE otherwise.
     */
    function isHidden();
}
