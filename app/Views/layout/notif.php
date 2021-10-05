 <?php if(session()->getFlashdata('success')) : ?>
 <div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show" role="alert">
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  <strong>Success - </strong> <?=session()->getFlashdata('success')?>
</div>
<?php elseif(session()->getFlashdata('alert')) : ?>
<div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  <strong>Error - </strong> <?=session()->getFlashdata('alert')?>
</div>
<?php endif ?>