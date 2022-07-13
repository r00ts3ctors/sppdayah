<?php
$this->load->view('template/head');
$this->load->view('template/menu');

?>


<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">

            <?php
            foreach ($konten as $key => $value) {
                $this->load->view($value);
            }

            ?>
        </div>
    </div>
</div>

<?php
$this->load->view('template/footer');

?>