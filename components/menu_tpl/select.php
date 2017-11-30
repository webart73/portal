<option value="<?= $category['id'] ?>"
    <?php if ($category['id'] == $this->model->parentId) echo ' selected' ?>
    <?php if ($category['id'] == $this->model->id) echo ' disabled' ?>>
    <?= $tab . $category['categoryTitle'] ?></option>
<?php if (isset($category['childs'])): ?>
    <?= $this->getMenuHtml($category['childs'], $tab . '&nbsp&nbsp&nbsp&nbsp&nbsp- ') ?>
<?php endif; ?>
