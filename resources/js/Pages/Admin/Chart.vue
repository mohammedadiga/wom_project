<template>

<user-layout>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2>Table Tools<small>Basic example without any additional modification classes</small></h2>
                        <ul class="header-dropdown dropdown">

                            <li><a href="javascript:void(0);" class="full-screen"><i class="fa fa-expand"></i></a></li>
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
                        <div class="table-responsive">
                            <table class="table table-striped table-hover dataTable js-exportable">
                                <thead>
                                    <tr>
                                        <th>Country Name</th>
                                        <th>Stock Quantity</th>
                                        <th>One Stock Price</th>
                                        <th>Stock Available</th>
                                        <th>Stock Sold</th>
                                        <th>Salary</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Country Name</th>
                                        <th>Stock Quantity</th>
                                        <th>One Stock Price</th>
                                        <th>Stock Available</th>
                                        <th>Stock Sold</th>
                                        <th>Salary</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <tr v-for="(data, index) in datas" :key="index">
                                        <td>{{data.countryname}}</td>
                                        <td>{{data.stock_quantity}}</td>
                                        <td>{{data.stock_price}}</td>
                                        <td>{{data.stock_available}}</td>
                                        <td>{{data.stock_sold}}</td>
                                        <td>{{data.countryname}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</user-layout>
</template>

<script>
import AdminLayout from '@/Layouts/AdminLayout';
import Welcom from '@/Components/welcom';
export default{
    props:['datas'],
    layout:AdminLayout,
    methods:{
    }
};
</script>
