<option value="<?= $category['id'] ?>"
    <?php if ($category['id'] == $this->model->parent_id) echo ' selected' ?>
    <?php if ($category['id'] == $this->model->id) echo ' disabled' ?>>
    <?= $tab . $category['category_title'] ?></option>
<?php if (isset($category['childs'])): ?>
    <?= $this->getMenuHtml($category['childs'], $tab . '&nbsp&nbsp&nbsp&nbsp&nbsp- ') ?>
<?php endif; ?>
