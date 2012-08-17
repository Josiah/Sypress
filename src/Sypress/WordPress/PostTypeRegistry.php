<?php namespace Sypress\WordPress;

use Sypress\ContentType\ContentTypeInterface;

class PostTypeRegistry
{
    /**
     * Regsiters a content type with WordPress as a post type
     * 
     * @param ContentTypeInterface $contentType Content Type
     */
    public function register(ContentTypeInterface $contentType)
    {
        register_post_type($contentType->getAlias(), $this->options($contentType));
    }

    /**
     * Generates post type options from the specified content type.
     *
     * @param ContentTypeInterface $contentType ContentTypeInterface
     *
     * @return array
     */
    public function options(ContentTypeInterface $contentType)
    {
        $options = [
            'label'         => $contentType->getPlural(),
            'labels' => [
                'singular_name' => $contentType->getNoun(),
            ],
            'public'        => !$contentType->isHidden(),
            'menu_position' => $contentType->getMenuPosition(),
        ];

        if ($contentType->getDescription()) {
            $options['description'] = $contentType->getDescription();
        }

        return $options;
    }
}
