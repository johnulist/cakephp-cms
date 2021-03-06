<?php
$this->extend('QoboAdminPanel./Common/panel-wrapper');
$this->assign('panel-title', __d('QoboAdminPanel', 'Add new'));
$idContent = 'article-content';
?>
<?= $this->Form->create($article, ['type' => 'file']); ?>
<fieldset>
    <?php
    echo $this->Form->input('title');
    echo $this->Form->input('content', ['type' => 'textarea', 'id' => $idContent]);
    echo $this->Form->input('excerpt', ['type' => 'textarea']);
    echo $this->Form->input('categories._ids', ['options' => $categories, 'escape' => false]);
    ?>
    <?= $this->element('QoboAdminPanel.datepicker', [
        'options' => [
            'fieldName' => __d('cms', 'publish_date'),
            'type' => 'datetimepicker',
            'label' => true,
        ]
    ]); ?>
    <div class="form-group">
        <label class="control-label" for="featured-image"><?= __d('cms', 'Featured Image'); ?></label>
        <?php
        echo $this->Form->file('file');
        echo $this->Form->error('file');
        ?>
    </div>
</fieldset>
<?= $this->Form->button(__("Add"), ['class' => 'btn-primary']); ?>
<?= $this->Form->end() ?>
<?php
$url = $this->Url->assetUrl(['action' => 'uploadFromEditor', $article->id, '_ext' => 'json']);
echo $this->element('Cms.ckeditor', ['id' => $idContent, 'url' => $url]);
?>