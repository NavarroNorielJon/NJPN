<div class="content-wrapper pl-3 pr-3">
    <section class="content">
        <div class="container-fluid d-flex flex-wrap justify-content-between">
            <div class="pt-4 pl-3 pr-3">
                <h1><?= $icon ?><?= $page ?></h1>
            </div>
            <div class="d-flex flex-wrap align-content-center">
                <button class="btn btn-success" data-toggle="modal" data-target="#add_customer">
                    <i class="fas fa-plus-square mr-2"></i>Add Customer
                </button>
            </div>
        </div>
        <div class="card">
            <?= form_open("customer/customer_search", array("id" => "customer_search")) ?>
            <div class="card-body">
                <div class="d-flex p-1">
                    <div class="form-group flex-fill mr-4">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
                    <div class="form-group flex-fill mr-4">
                        <label for="email">E-mail</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>

                    <div class="form-group">
                        <label for="status">Account Status</label>
                        <select class="custom-select" id="status" name="status">
                            <option selected>All</option>
                            <option value="2">Active</option>
                            <option value="2">Pending</option>
                            <option value="2">Suspended</option>
                            <option value="2">Cancelled</option>
                            <option value="2">To Expire</option>
                            <!-- <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option> -->
                        </select>
                    </div>
                </div>

                <div class="d-flex">
                    <div class="form-group flex-fill">
                        <label for="publication">Publication</label>
                        <select class="custom-select" id="publication" name="publication" size="5" multiple>
                            <option selected>All</option>
                            <option value="2">One</option>
                            <option value="2">Two</option>
                            <option value="2">Three</option>
                            <option value="2">Four</option>
                            <!-- <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option> -->
                        </select>
                        <small id="helpId" class="text-muted">Press and hold the CTRL key to select mulitple products</small>
                    </div>
                </div>

                <div class="card-footer d-flex justify-content-end p-0">
                    <button class="btn btn-primary">Search</button>
                </div>
            </div>
            <?= form_close() ?>
        </div>
    </section>
</div>
<?php $this->load->view('admin/new_customer');?>