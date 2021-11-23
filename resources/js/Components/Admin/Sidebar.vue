<template>
  <div id="left-sidebar" class="sidebar">
      <a href="#" class="menu_toggle"><i class="fa fa-angle-left"></i></a>
      <div class="navbar-brand">
          <a :href="route('admin.dashboard.index')"><img :src="'/storage/images/icon.svg'" alt="Mooli Logo" class="img-fluid logo"><span>Mooli</span></a>
          <button type="button" class="btn-toggle-offcanvas btn btn-sm float-right"><i class="fa fa-close"></i></button>
      </div>
      <div class="sidebar-scroll">
          <div class="user-account">
              <div class="user_div">
                  <img :src="'/storage/images/user.png'" class="user-photo" alt="User Profile Picture">
              </div>
              <div class="dropdown">
                  <span>Hello,</span>
                  <a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown"><strong>{{$page.props.user.name}}</strong></a>
                  <ul class="dropdown-menu dropdown-menu-right account vivify flipInY">
                      <li><a :href="route('profile.show')"><i class="fa fa-user"></i>My Profile</a></li>
                      <li><a href=""><i class="fa fa-envelope"></i>Messages</a></li>
                      <li><a href=""><i class="fa fa-gear"></i>Settings</a></li>
                      <li class="divider"></li>
                      <li><a href="#"><i class="fa fa-power-off"></i>Logout</a></li>
                  </ul>
              </div>
          </div>
          <nav id="left-sidebar-nav" class="sidebar-nav">
              <ul id="main-menu" class="metismenu animation-li-delay">
                  <li class="header">Main</li>
                  <li :class="route().current('admin.dashboard.*') ? 'active' : '' "><a :href="route('admin.dashboard.index')"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
                  <li class="header">Apps</li>
                  <li :class="route().current('admin.data.*') ? 'active' : '' "><a :href="route('admin.data.index')" :active="route().current('admin.data.index')"><i class="fa fa-envelope"></i> <span>Datas</span></a></li>
                  <li :class="route().current('admin.chart.*') ? 'active' : '' "><a :href="route('admin.chart.index')"><i class="fa fa-pie-chart"></i> <span>Chart</span></a></li>
                  <li><a href="#"><i class="fa fa-comments"></i> <span>Wallets</span></a></li>
                  <li><a href="#"><i class="fa fa-calendar"></i> <span>Users</span></a></li>
                  <li :class="route().current('admin.roles.*') ? 'active' : '' "><a :href="route('admin.roles.index')" :active="route().current('admin.roles.index')"><i class="fa fa-th-list"></i> <span>Admins</span></a></li>
              </ul>
          </nav>
      </div>
  </div>
</template>

<script>
import { Head, Link } from '@inertiajs/inertia-vue3'
export default{
    components:{
        Link,
        Head,
    },
};
</script>
