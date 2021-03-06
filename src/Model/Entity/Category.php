<?php
namespace Cms\Model\Entity;

use Cake\ORM\Entity;

/**
 * Category Entity.
 *
 * @property string $id
 * @property string $slug
 * @property string $name
 * @property string $parent_id
 * @property \Cms\Model\Entity\Category $parent_category
 * @property int $lft
 * @property int $rght
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 * @property \Cms\Model\Entity\Category[] $child_categories
 * @property \Cms\Model\Entity\Article[] $articles
 */
class Category extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false,
    ];

    /**
     * Options for aligning the article image.
     *
     * @return array Align options.
     */
    protected function _getAlignOptions()
    {
        return [
            'left' => __d('cms', 'Left'),
            'right' => __d('cms', 'Right'),
            'center' => __d('cms', 'Center'),
            'stretch' => __d('cms', 'Stretch'),
            'img-responsive' => __d('cms', 'Responsive'),
        ];
    }
}
