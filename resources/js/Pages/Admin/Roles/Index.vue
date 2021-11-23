<template>
    <admin-layout>
        <div class="container-fluid">
            <!-- Page header section  -->
            <div class="block-header">
                <div class="row clearfix">
                    <div class="col-md-5 col-sm-12">
                        <h1>Hi, Welcomeback!</h1>
                        <span>JustDo Contacts,</span>
                    </div>
                    <div class="col-md-7 col-sm-12 text-md-right">
                        <div class="d-flex align-items-center justify-content-md-end mt-4 mt-md-0 flex-wrap vivify pullUp delay-550">
                            <div class="border-right pr-4 mr-4 mb-2 mb-xl-0">
                                <p class="text-muted mb-1">Total</p>
                                <h5 class="mb-0">561</h5>
                            </div>
                            <div class="border-right pr-4 mr-4 mb-2 mb-xl-0">
                                <p class="text-muted mb-1">Google</p>
                                <h5 class="mb-0">87</h5>
                            </div>
                            <div class="border-right pr-4 mr-4 mb-2 mb-xl-0">
                                <p class="text-muted mb-1">{{alert}}</p>
                                <h5 class="mb-0">0</h5>
                            </div>
                            <div class="mb-3 mb-xl-0">
                                <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#CreateTask" @click="addModal()">Add New</button>
                                <button type="button" class="btn btn-dark"  @click="alerts('success','button massege')">Add New</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-12">
                    <div class="card bg-clear">
                        <div class="header">
                            <ul class="nav nav-tabs3">
                                <li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#Admins">Admins</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Users">Users</a></li>
                            </ul>
                            <ul class="header-dropdown dropdown">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                                    <ul class="dropdown-menu theme-bg gradient">
                                        <li><a href="javascript:void(0);"><i class="dropdown-icon fa fa-eye"></i> View Details</a></li>
                                        <li><a href="javascript:void(0);"><i class="dropdown-icon fa fa-share-alt"></i> Share</a></li>
                                        <li><a href="javascript:void(0);"><i class="dropdown-icon fa fa-copy"></i> Copy to</a></li>
                                        <li><a href="javascript:void(0);"><i class="dropdown-icon fa fa-folder"></i> Move to</a></li>
                                        <li><a href="javascript:void(0);"><i class="dropdown-icon fa fa-edit"></i> Rename</a></li>
                                        <li><a href="javascript:void(0);"><i class="dropdown-icon fa fa-trash"></i> Delete</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="tab-content mt-0">
                                <div class="tab-pane show active" id="Admins">
                                    <div class="row clearfix">
                                        <div class="col-lg-3 col-md-4 col-sm-6" v-for="(role, index) in roles" :key="index">
                                            <div class="card contact_card">
                                                <div class="header">
                                                    <ul class="header-dropdown dropdown">
                                                        <li class="dropdown">
                                                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                                                            <ul class="dropdown-menu theme-bg gradient">
                                                                <li><a href="javascript:void(0);" data-toggle="modal" data-target="#CreateTask" @click="editModal(role)">Edit</a></li>
                                                                <li><a href="javascript:void(0);" class="btn-toastr" @click="deleteRole(role)" data-context="success" data-message="This is success info" data-position="top-right">Delet</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="body text-center">
                                                    <div class="circle">
                                                        <img class="rounded-circle" v-if="role.name == 'admin' " :src="'/storage/images/sm/avatar1.jpg'" alt="">
                                                        <img class="rounded-circle" v-if="role.name == 'moderator' " :src="'/storage/images/sm/avatar2.jpg'" alt="">
                                                        <img class="rounded-circle" v-if="role.name == 'developer' " :src="'/storage/images/sm/avatar3.jpg'" alt="">
                                                        <img class="rounded-circle" v-if="role.name == 'super-admin' " :src="'/storage/images/sm/avatar4.jpg'" alt="">
                                                        <img class="rounded-circle" v-if="role.name == 'user' " :src="'/storage/images/sm/avatar6.jpg'" alt="">
                                                    </div>
                                                    <h6 class="mt-3 mb-2">{{role.name}}</h6>
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="accordion" id="accordion">
                                                            <div>
                                                                <div class="card-header" id="headingOne">
                                                                    <h5 class="mb-0">
                                                                        <button class="btn btn-link text-center" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" :aria-controls="role.name">
                                                                            permissions
                                                                        </button>
                                                                    </h5>
                                                                </div>
                                                                <div id="collapseOne" class="collapse" :aria-labelledby="role.name" data-parent="#accordion">
                                                                    <div class="card-body">
                                                                    <span v-for="(permission,index) in role.permissions" :key="index">
                                                                        <h6 class="mx-1">{{permission.name}}</h6>
                                                                    </span>
                                                                    </div>
                                                                </div>
                                                                <hr>
                                                                <span>Created <br> {{role.created_at}}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="Users">
                                    <div class="form-group c_form_group bg-white">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search here...">
                                            <div class="input-group-append"><button class="btn btn-primary btn-sm theme-bg gradient" type="button">Search</button></div>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-hover table-custom spacing5 mb-0">
                                            <thead class="table-light">
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Permissions</th>
                                                    <th>Created</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr v-for="(role, index) in roles" :key="index">
                                                    <td>
                                                        <a href="#" title="">{{role.name}}</a>
                                                        <p class="mb-0">+ 264-625-5858</p>
                                                    </td>
                                                    <td>
                                                        <span>Permissions</span>
                                                    </td>
                                                    <td>
                                                        <span>{{role.created_at}}</span>
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-primary theme-bg gradient btn-sm mr-3">Edit</button>
                                                        <button class="btn btn-danger btn-sm">Delete</button>
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
                <div class="modal fade" id="CreateTask" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <form class="modal-content" @submit.prevent="checkMode">
                            <div class="modal-header">
                                <h5 class="modal-title" id="defaultModalLabel">{{fromTitle}}</h5>
                            </div>
                            <div class="modal-body">
                                <div class="row">

                                    <div class="col-12">
                                        <div class="form-group c_form_group">
                                            <label for="role">Role Name</label>
                                            <div class="form-line">
                                                <input type="text" id="role" class="form-control" placeholder="Role Name" v-model="form.name"  :class="{'is-invalid': form.errors.name }" autofocus autocomplete="off">
                                            </div>
                                        </div>
                                        <div :class="{'d-block' : form.errors.name}">
                                            {{form.errors.name}}
                                        </div>
                                    </div>
<!--
                                    <div class="col-lg-12">
                                        <div class="form-group c_form_group">
                                            <label>Custom Checkbox</label>
                                            <div class="multiselect_div">
                                                <select id="multiselect2" class="multiselect multiselect-custom" multiple="multiple" v-model="form.permissions" :options="permissionOptions" @addPermissions="addPermissions" label="name" track-by="id">
                                                    <option  v-for="(permission, index) in permissions" :key="index" >{{permission.name}}</option>
                                                </select>
                                            </div>
                                            <div :class="{'d-block' : form.errors.permissions}">
                                                {{form.errors.permissions}}
                                            </div>
                                        </div>
                                    </div> -->

                                    <div class="col-12 mt-2">
                                        <div class="form-group c_form_group">
                                            <label for="permissions">Permissions</label>
                                            <multiselect
                                                        v-model="form.permissions"
                                                        :options="permissionOptions"
                                                        :multiple="true"
                                                        :taggable="true"
                                                        placeholder="Choose permission(s)"
                                                        @addPermissions="addPermissions"
                                                        label="name"
                                                        track-by="id">
                                            </multiselect>
                                        </div>
                                        <div :class="{'d-block' : form.errors.permissions}">
                                            {{form.errors.permissions}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary theme-bg gradient">{{buttonText}}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </admin-layout>
</template>

<script>
import AdminLayout from '@/Layouts/AdminLayout'
export default{
    props:['roles','permissions'],
    components:{
        AdminLayout,
    },
    data(){
        return{
            editedIndex: -1,
            editMode:false,
            alert:0,
            form: this.$inertia.form({
                id:'',
                name:'',
                permissions:[],
            }),
            permissionOptions: this.permissions,
        }
    },
    computed:{
        fromTitle(){
            return this.editedIndex === -1 ? 'Create New Role' : 'Edit Current Role';
        },
        buttonText(){
            return this.editedIndex === -1 ? 'Create' : 'Edit';
        },
        checkMode(){
            return this.editMode === false ? this.createRole() : this.editRole() ;
        },
        alert(){
             return this.alert === 1 ? 'done' : '' ;
        }
    },
    methods:{
        addPermissions(newPermission){
            let permission ={
                name: newPermission,
            }
            this.permissionOptions.push(permission)
            this.form.permissions.push(permission)
        },
        addModal(){
            this.editMode = false
            this.form.reset()
            this.editedIndex = -1
        },
        alerts(status,massege){
            toastr.options.timeOut = "2000";
            toastr.options.closeButton = true;
            toastr.options.positionClass = 'toast-top-right';
            toastr[status](massege);
        },
        editModal(role){
            this.editMode = true
            this.editedIndex = this.roles.indexOf(role)
            this.form.name = role.name
            this.form.id = role.id
            this.form.permissions = role.permissions
        },
        createRole(){
            this.form.post(this.route('admin.roles.store'),{
                preserveScroll:true,
                onSuccess:() =>{
                    this.alerts('success','New Role Created!')
                    this.form.reset()
                }
            })
        },
        editRole(){
            this.form.patch(this.route('admin.roles.update', this.form.id, this.form),{
                preserveScroll:true,
                onSuccess:() =>{
                    this.alerts('success','Edit Role Success')
                }
            })
        },
        deleteRole(role){
            this.form.delete(this.route('admin.roles.destroy', role),{
                preserveScroll:true,
                onSuccess:() =>{
                    this.alerts('success','Delete success')
                }
            })
        }
    }
}
</script>

<style>
.multiselect__content-wrapper{
     position: relative;
}
</style>
