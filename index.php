<?php include('./inc/header.php'); ?>
<div id="app">
        <div class="container">
                <div class="row mt-4">
                        <div class="col-md-8 mx-auto">
                                <div class="p-3">
                                        <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#addContact" @click="clearFields()">Add new</button>
                                </div>
                                <div class="card card-primary">
                                        <div class="card-body">
                                                <table class="table">
                                                        <thead>
                                                                <tr>
                                                                        <th>Name</th>
                                                                        <th>Phone</th>
                                                                        <th>Action</th>
                                                                </tr>
                                                        </thead>
                                                        <tbody v-for="(contact,index) in contacts">
                                                                <tr key="index">
                                                                        <td scope="row">{{contact.name}}</td>
                                                                        <td>{{contact.tel}}</td>
                                                                        <td>
                                                                                <a @click="getContact(contact.id)" data-toggle="modal" data-target="#updateContact" class="btn btn-sm btn-warning">Update</a>
                                                                                <a @click="deleteContact(contact.id,index)" class="btn btn-sm btn-danger">Delete</a>
                                                                        </td>
                                                                </tr>
                                                        </tbody>
                                                </table>
                                        </div>
                                </div>
                        </div>
                </div>
        </div>
</div>
<?php include('./inc/footer.php'); ?>