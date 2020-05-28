<template>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Categories Table</h3>
                    <div class="card-tools">
                            <button class="btn btn-primary" ><router-link to="/category" style="color: #ffffff">Add New</router-link> </button>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                        <tr>
                            <th>Sl</th>
                            <th>Name</th>
                            <th>Modify</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr >
                            <td></td>
                            <td></td>
                            <td>
                                <a href="javascript:void(0)" ><i class="fa fa-trash"></i>Delete</a>
                                <a href="javascript:void(0)" ><i class="fa fa-edit"></i>Edit</a>

                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
