<?php
namespace Cms\Model\Table;

use Burzum\FileStorage\Model\Table\ImageStorageTable;

class ContentImagesTable extends ImageStorageTable
{
    /**
     * Save the entity to the file storage table.
     * Please note this is a child of the ImageStorageTable.
     *
     * @see ImageStorageTable class
     * @param  uuid $articleId the id of the article
     * @param  object $entity  Entity object
     * @return bool         Flag whether the record has got stored or not
     */
    public function uploadImage($articleId, $entity)
    {
        $entity = $this->patchEntity($entity, [
            'adapter' => 'Local',
            'model' => 'ContentImage',
            'foreign_key' => $articleId
        ]);

        return $this->save($entity);
    }
}
