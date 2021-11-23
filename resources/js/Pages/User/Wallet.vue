<template>
<user-layout>
           <div class="container-fluid">
                <!-- Page header section  -->
            <div class="block-header">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-12 col-sm-12">
                    <h1>Hi, Welcomeback!</h1>
                    <span>JustDo Dashboard,</span>
                    </div>
                    <div class="col-lg-8 col-md-12 col-sm-12 text-lg-right">
                    <div
                        class="
                        d-flex
                        align-items-center
                        justify-content-lg-end
                        mt-4 mt-lg-0
                        flex-wrap
                        vivify
                        pullUp
                        delay-550
                        "
                    >
                        <div class="border-right pr-4 mr-4 mb-2 mb-xl-0 hidden-xs">
                        <p class="text-muted mb-1">
                            Purchases
                            <span id="mini-bar-chart3" class="mini-bar-chart"></span>
                        </p>
                        <h5 class="mb-0">289</h5>
                        </div>
                        <div class="border-right pr-4 mr-4 mb-2 mb-xl-0">
                        <p class="text-muted mb-1">
                            Today’s profit
                            <span id="mini-bar-chart2" class="mini-bar-chart"></span>
                        </p>
                        <h5 class="mb-0">$541</h5>
                        </div>
                        <div class="mb-3 mb-xl-0">
                        <p class="text-muted mb-1">
                            Balance
                            <span id="mini-bar-chart1" class="mini-bar-chart"></span>
                        </p>
                        <h5 class="mb-0">$98M</h5>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
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
                                            <th>Amount Stock</th>
                                            <th>One Stock Price</th>
                                            <th>Amount Stock Price</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Country Name</th>
                                            <th>Amount Stock</th>
                                            <th>One Stock Price</th>
                                            <th>Amount Stock Price</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr v-for="(wallet, index) in wallets" :key="index">
                                            <td>{{wallet.countryname}}</td>
                                            <td>{{wallet.amount_stock}}</td>
                                            <td>{{wallet.stock_price}}</td>
                                            <td>{{wallet.amount_stock_price}}</td>
                                            <td>{{wallet.countryname}}</td>
                                            <td>{{wallet.countryname}}</td>
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
import UserLayout from '@/Layouts/UserLayout';
export default{
    props:['wallets'],
    layout:UserLayout,
    methods:{
    }
};
</script>
