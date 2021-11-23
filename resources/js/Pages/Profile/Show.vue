<template>
    <user-layout>
        <div class="container-fluid">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <h1>Hi, Welcomeback!</h1>
                    <span>JustDo My Profile,</span>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12 text-lg-right">
                    <div class="d-flex align-items-center justify-content-lg-end mt-4 mt-lg-0 flex-wrap vivify pullUp delay-550">
                        <div class="border-right pr-4 mr-4 mb-2 mb-xl-0 hidden-xs">
                            <p class="text-muted mb-1">Purchases <span id="mini-bar-chart3" class="mini-bar-chart"></span></p>
                            <h5 class="mb-0">289</h5>
                        </div>
                        <div class="border-right pr-4 mr-4 mb-2 mb-xl-0">
                            <p class="text-muted mb-1">Today’s profit <span id="mini-bar-chart2" class="mini-bar-chart"></span></p>
                            <h5 class="mb-0">$541</h5>
                        </div>
                        <div class="mb-3 mb-xl-0">
                            <p class="text-muted mb-1">Balance <span id="mini-bar-chart1" class="mini-bar-chart"></span></p>
                            <h5 class="mb-0">$98M</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row clearfix">

            <div class="col-md-12">
                <div class="card social theme-bg gradient">
                    <div class="profile-header d-sm-flex justify-content-between justify-content-center">
                        <div class="d-flex">
                            <div class="mr-3">
                                <img :src="'/storage/images/user.png'" class="rounded" alt="">
                            </div>
                            <div class="details">
                                <h5 class="mb-0">{{$page.props.user.name}}</h5>
                                <span class="text-light">{{$page.props.user.email}}</span>
                                <p class="mb-0"><span>Posts: <strong>321</strong></span> <span>Followers: <strong>4,230</strong></span> <span>Following: <strong>560</strong></span></p>
                            </div>
                        </div>
                        <div>
                            <button class="btn btn-default">Follow</button>
                            <button class="btn btn-dark">Message</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-12 col-lg-12 col-md-7">
                <div class="card">

                    <div class="header">
                        <h2>Basic Information</h2>
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
                        <div class="row clearfix">
                            <div class="col-lg-12 col-md-12">
                                <div v-if="$page.props.jetstream.canUpdateProfileInformation">
                                    <update-profile-information-form :user="$page.props.user" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="card">
                    <div class="header">
                        <h2>Change Password</h2>
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
                        <div class="row clearfix">
                        <div class="col-lg-12 col-md-12">
                            <div v-if="$page.props.jetstream.canUpdatePassword">
                                <update-password-form :user="$page.props.user" />
                            </div>
                        </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="header">
                        <h2>Two Factor Authentication</h2>
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
                        <div class="row clearfix">
                        <div class="col-lg-12 col-md-12">
                            <div v-if="$page.props.jetstream.canManageTwoFactorAuthentication">
                                <two-factor-authentication-form class="mt-10 sm:mt-0" />
                            </div>
                        </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="header">
                        <h2>Two Factor Authentication</h2>
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
                        <div class="row clearfix">
                        <div class="col-lg-12 col-md-12">
                            <logout-other-browser-sessions-form :sessions="sessions" class="mt-10 sm:mt-0" />
                        </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                <div v-if="$page.props.jetstream.canUpdateProfileInformation">
                    <update-profile-information-form :user="$page.props.user" />

                    <jet-section-border />
                </div>

                <div v-if="$page.props.jetstream.canUpdatePassword">
                    <update-password-form class="mt-10 sm:mt-0" />

                    <jet-section-border />
                </div>

                <div v-if="$page.props.jetstream.canManageTwoFactorAuthentication">
                    <two-factor-authentication-form class="mt-10 sm:mt-0" />

                    <jet-section-border />
                </div>

                <logout-other-browser-sessions-form :sessions="sessions" class="mt-10 sm:mt-0" />

                <template v-if="$page.props.jetstream.hasAccountDeletionFeatures">
                    <jet-section-border />

                    <delete-user-form class="mt-10 sm:mt-0" />
                </template>
            </div> -->
        </div>
        </div>
    </user-layout>

  <!-- <app-layout title="Profile">
    <template #header>
      <h2 class="h4 font-weight-bold">
        Profile
      </h2>
    </template>

    <div v-if="$page.props.jetstream.canUpdateProfileInformation">
      <update-profile-information-form :user="$page.props.user" />

      <jet-section-border />
    </div>

    <div v-if="$page.props.jetstream.canUpdatePassword">
      <update-password-form />

      <jet-section-border />
    </div>

    <div v-if="$page.props.jetstream.canManageTwoFactorAuthentication">
      <two-factor-authentication-form />

      <jet-section-border />
    </div>

    <logout-other-browser-sessions-form :sessions="sessions" />

    <template v-if="$page.props.jetstream.hasAccountDeletionFeatures">
      <jet-section-border />

      <delete-user-form />
    </template>
  </app-layout> -->
</template>

<script>
import { defineComponent } from 'vue'
import AppLayout from '@/Layouts/AppLayout.vue'
import DeleteUserForm from '@/Pages/Profile/Partials/DeleteUserForm.vue'
import JetSectionBorder from '@/Jetstream/SectionBorder.vue'
import LogoutOtherBrowserSessionsForm from '@/Pages/Profile/Partials/LogoutOtherBrowserSessionsForm.vue'
import TwoFactorAuthenticationForm from '@/Pages/Profile/Partials/TwoFactorAuthenticationForm.vue'
import UpdatePasswordForm from '@/Pages/Profile/Partials/UpdatePasswordForm.vue'
import UpdateProfileInformationForm from '@/Pages/Profile/Partials/UpdateProfileInformationForm.vue'

import UserLayout from '@/Layouts/AdminLayout';
export default defineComponent({
  props: ['sessions'],

  components: {
    UserLayout,
    DeleteUserForm,
    JetSectionBorder,
    LogoutOtherBrowserSessionsForm,
    TwoFactorAuthenticationForm,
    UpdatePasswordForm,
    UpdateProfileInformationForm,
  },
})
</script>
